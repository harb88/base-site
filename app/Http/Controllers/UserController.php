<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use app\Library\FCLawyers\LawMaster\Entity;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Shows the user settings page
     * @return mixed
     */
    public function settings()
    {
        //get user record
        $user = Auth::user();

        //check user has an Entity ID assigned
        if(!isset($user->Entity->entity_id))
        {
            //redirect to dashboard route with error message
            return redirect('/dashboard')->withErrors('You have not been assigned an Entity ID. Please contact the system administrator for support.');
        }

        //get LawMaster entity
        $entityModel = new Entity();
        $entity = $entityModel->getEntity($user->Entity->entity_id);

        //check we successfully retrieved the entity
        if($entity == false)
        {
            //redirect to dashboard route with error message
            return redirect('/dashboard')->withErrors('There was an error retrieving your personal details. Please contact the system administrator for support.');
        }

        //display view
        return view('user/settings')->with(['user' => $user, 'entity' => $entity]);
    }

    /**
     * Shows the user details loaded from LawMaster entity
     * and allows editing and updating
     * @return mixed
     */
    public function editPersonalDetails(Request $request)
    {
        //get user record
        $user = Auth::user();

        //check user has an Entity ID assigned
        if(!isset($user->Entity->entity_id))
        {
            //redirect to dashboard route with error message
            return redirect('/dashboard')->withErrors('You have not been assigned an Entity ID. Please contact the system administrator for support.');
        }

        //get LawMaster entity
        $entityModel = new Entity();
        $entity = $entityModel->getEntity($user->Entity->entity_id);

        //check we successfully retrieved the entity
        if($entity == false)
        {
            //redirect to dashboard route with error message
            return redirect('/dashboard')->withErrors('There was an error retrieving your personal details. Please contact the system administrator for support.');
        }

        //check for post
        if($request->isMethod('post'))
        {
            //validate request data
            $this->validate($request, [
                'Title' => 'required|alpha|max:255',
                'FirstNames' => 'required|max:255',
                'Surname' => 'required|alpha|max:255',
                'PhoneBusiness' => ['regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'],
                'PhonePrivate' => ['regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'],
                'PhoneMobile' => ['regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'],
                'Fax' => ['regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'],
                'EmailAddress' => 'required|email',
                'Website' => 'max:255|url',
                'AddressMailingStreetName1' => 'max:255',
                'AddressMailingStreetName2' => 'max:255',
                'AddressMailingSuburb' => 'max:255',
                'AddressMailingPostCode' => ['digits:4'],
                'AddressMailingState' => 'max:255',
                'AddressMailingCountry' => 'max:255',
            ]);

            //update entity array data with new data
            foreach($request->all() as $k => $e)
            {
                if($k != "_token")
                {
                    $entity[$k] = $e;
                }
            }

            //attempt to update entity and check response
            if($entityModel->updateEntity($entity))
            {
                //redirect to settings route with success message
                return redirect('user/settings')->withErrors('!success! Personal details updated successfully!');
            }
            else
            {
                //redirect to settings route with error message
                return redirect('user/settings')->withErrors('An error occured when attempting to update your personal details. Please contact the system administrator for support.');
            }

        }
        else
        {
            //no post - display view
            return view('user/edit-personal-details')->with(['entity' => $entity]);
        }
    }
}