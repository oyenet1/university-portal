<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make(
            $input,
            [
                'surname' => ['required', 'string', 'max:255'],
                'city_id' => ['required'],
                'state' => ['required', 'string', 'max:255'],
                'current_role' => ['required', 'string', 'max:255', 'not_in:admin,superadmin'],
                'firstname' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'phone' => [
                    'required',
                    'integer',
                    'digits_between:10,11',
                    Rule::unique(User::class),
                ],
                'password' => $this->passwordRules(),
            ],
            ['phone.integer' => 'The phone number must be a numbers with 10 digits without the first zero e.g 8090008900']
        )->validate();

        return User::create([
            'surname' => $input['surname'],
            'city_id' => $input['city_id'],
            'current_role' => $input['current_role'],
            'firstname' => $input['firstname'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}