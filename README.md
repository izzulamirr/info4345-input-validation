# Laravel To DO app Assignment 

1. Model file Enhancement.
   # added more attributes in the model
   -   'nickname',
        'phone_no', 
        'city',
        'avatar'

2. Edit the registrations and login controller
   # to reduces the amount of functions uses in the controller


3. Created 2 request file login and registrations
   # implement the input validations in the request
   - 'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nickname' => ['nullable', 'string', 'max:255'],
            'phone_no' => ['nullable', 'string', 'regex:/^\d{10,15}$/'], // Only digits, 10-15 characters
            'city' => ['nullable', 'string', 'max:255'],
   # uses regex as a rules for the registrations


   4. Created profile pages
      # handles changes of informations and credentials.
      - able to edit and save changes in the database.
      - able to deleted and update users from the database
     

   
