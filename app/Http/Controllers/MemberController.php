<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
//use Log;

class MemberController extends Controller
{
    public function getMemberList(){
        try {
            $members = User::all();
            return response()->json($members);
        }catch (Exception $e){
            Log::error($e);
        }
    }
    public function getMemberDetails(Request $request){
        try {

            $memberData = User::findOrFail($request->get('memberId'));
            return response()->json($memberData);
        }catch (Exception $e){
            Log::error($e);
        }
    }
    public function updateMemberDetails(Request $request){
        try {
//            dd($request->all());
                $id = $request->get('memberId');
                $name = $request->get('name');
                $email = $request->get('email');
                $gender = $request->get('gender');
                $phone_no = $request->get('phone_no');
                $dob = $request->get('dob');
                $marital_status = $request->get('marital_status');
                $age_cluster = $request->get('age_cluster');
                $cell_group_id = $request->get('cell_group_id');
                $estate_id = $request->get('estate_id');
                $employment_status = $request->get('employment_status');
                $born_again = $request->get('born_again');
                $leadership_id = $request->get('leadership_id');
                $ministry_id = $request->get('ministry_id');
                $profession_id = $request->get('profession_id');
                $education_level_id = $request->get('education_level_id');

                User::where('id', $id)->update([
                    'name'=>$name,
                    'email'=>$email,
                    'gender'=>$gender,
                    'phone_no'=>$phone_no,
                    'dob'=>$dob,
                    'marital_status'=>$marital_status,
                    'age_cluster'=>$age_cluster,
                    'cell_group_id'=>$cell_group_id,
                    'estate_id'=>$estate_id,
                    'employment_status'=>$employment_status,
                    'born_again'=>$born_again,
                    'leadership_id'=>$leadership_id,
                    'ministry_id'=>$ministry_id,
                    'profession_id'=>$profession_id,
                    'education_level_id'=>$education_level_id
                ]);

                return response()->json([
                    'email'=>$email,
                    'gender'=>$gender,
                    'phone_no'=>$phone_no,
                    'dob'=>$dob,
                    'marital_status'=>$marital_status,
                    'age_cluster'=>$age_cluster,
                    'cell_group_id'=>$cell_group_id,
                    'estate_id'=>$estate_id,
                    'employment_status'=>$employment_status,
                    'born_again'=>$born_again,
                    'leadership_id'=>$leadership_id,
                    'ministry_id'=>$ministry_id,
                    'profession_id'=>$profession_id,
                    'education_level_id'=>$education_level_id
                ]);

        }catch (Exception $e){

        }
    }
    public function destroy(User $member){
        try {
            $member->delete();
        }catch (Exception $e){
            Log::error(e);
        }
    }

    public function store(Request $request){
        try {
            $name = $request->get('name');
            $email = $request->get('email');
            $gender = $request->get('gender');
            $phone_no = $request->get('phone_no');
            $dob = $request->get('dob');
            $marital_status = $request->get('marital_status');
            $age_cluster = $request->get('age_cluster');
            $cell_group_id = $request->get('cell_group_id');
            $estate_id = $request->get('estate_id');
            $employment_status = $request->get('employment_status');
            $born_again = $request->get('born_again');
            $leadership_id = $request->get('leadership_id');
            $ministry_id = $request->get('ministry_id');
            $profession_id = $request->get('profession_id');
            $education_level_id = $request->get('education_level_id');

            $create = User::create([
                'name'=>$name,
                'email'=>$email,
                'gender'=>$gender,
                'phone_no'=>$phone_no,
                'dob'=>$dob,
                'marital_status'=>$marital_status,
                'age_cluster'=>$age_cluster,
                'cell_group_id'=>$cell_group_id,
                'estate_id'=>$estate_id,
                'employment_status'=>$employment_status,
                'born_again'=>$born_again,
                'leadership_id'=>$leadership_id,
                'ministry_id'=>$ministry_id,
                'profession_id'=>$profession_id,
                'education_level_id'=>$education_level_id
            ]);



            return response()->json([
                'email'=>$email,
                'gender'=>$gender,
                'phone_no'=>$phone_no,
                'dob'=>$dob,
                'marital_status'=>$marital_status,
                'age_cluster'=>$age_cluster,
                'cell_group_id'=>$cell_group_id,
                'estate_id'=>$estate_id,
                'employment_status'=>$employment_status,
                'born_again'=>$born_again,
                'leadership_id'=>$leadership_id,
                'ministry_id'=>$ministry_id,
                'profession_id'=>$profession_id,
                'education_level_id'=>$education_level_id
            ]);
        }catch (Exception $e){
            Log::error($e);
        }
    }
}
