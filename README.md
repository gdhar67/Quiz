# Quiz
## **A basic website for _Testing Your Knowledge_:stuck_out_tongue_winking_eye:**


###SERVER USED

- Laravel Framework
- Version 5.3.28

-----------------------------------------------------------------------------------

###OVERVIEW

- First, HomePage is displayed in which there are Two Forms namely **Register And LogIn form** . 
- A user can either Register, by providing his/her details in the Register Form or directly LogIn if he/she is a Registered User.
- After the submission of either of the Forms , The Inputs are Validated and if the required details are provided correctly then the User is Redirected to 	 the DashBoard. 
- If the Inputs are not satisfied then a **Error Message** is shown regarding the error.
- After the User is Redirected to DashBoard , He/she can answer the various Questions submitted by other Users.
- The Answer is displayed after the user Answers a specific Question.
- The User is updated by his score each time he/she tries to Answer a Question. 
- **+1 for a Correct Answer and -1 for a Wrong Answer**.
- The User can also submit a Question By clicking On **Submit Question** button provided in the DashBoard.
- It Redirects the User to a Page where the user is able submit a Question and Answer for the same.
- After submitting the Question a message is displayed telling the User that the post was successfully submitted or not.
- The User can view the previously submitted Questions By clicking On **View Your Questions** button provided in the DashBoard.
- It Redirects the User to a Page where the user is able see the Questions and their Answer, and allows the User to make changes in the post by clicking on **Edit This Post**.
- A **Home** button is provided so that the User can go back to DashBoard after submitting the Question or after viewing the submitted Questions.
- In all the Pages except HomePage, A **Logout** button is provided, So that the User can Logout at any instant.

-----------------------------------------------------------------------------------

###SERVER ROUTES

#####/homepage
- It takes us to the homepage of the project.
- A User can Signup if he/she doesn't have a User Account.
- If the User is a Registered User then he/she can Signin from this Page.

#####/signup
- SignUp is done using this route.
- The newly Signed In User is redirected to the DashBoard where he/she can Answer Questions asked by other Users.

#####/signin
- SignIn is done using this route.
- The User is Authenticated and redirected to the DashBoard where he/she can Answer Questions asked by other Users.

#####/logout
- User is Logged Out using this route.
- After Logout User is redirected to the HomePage.

#####/dashboard
- This route is used to access the DashBoard.

#####/question
- This route is used to Submit a Question by a Signed In User.

#####/submitque
- The Question is Submitted using this route.

#####/submitans
- The Answer for any Question is Submitted by this route.

#####/viewque
- All the Submitted Question by the User can be viewed by this route.

#####/edit
- The Submitted Question can be edited by this route.

-----------------------------------------------------------------------------------


###DATABASES/TABLES 


####Database : dbuserr
===================================================================================
#####Table : users
#####Fields
* Id
* created_at
* updated_at
* Name
* Username
* password
* score
* remember_token

===================================================================================

#####Table : posts
#####Fields
* Id
* created_at
* updated_at
* que
* option_a
* option_b
* option_c
* option_d
* ans

===================================================================================

#####Table : posts
#####Fields
* Id
* created_at
* updated_at
* que
* users_id
* post_id
* Ans

-----------------------------------------------------------------------------------


###BUILD INSTRUCTIONS

* Clone the repository into a local folder in your computer.
* Use `git pull` to pull the code from Github.
* Go to the Quiz Directory from console and use the command `php artisan serve` to start your localhost server.
* Run the migrations using the command `php artisan migrate`.
* Then Run the seeder using the command `php artisan db:seed` which will enter the data as folows:
			
			User Data		
			
			* Id       : 1
			* Name     : user
			* Username : user
			* Password : user
			
			* Id       : 2
			* Name     : admin
			* Username : admin
			* Password : admin
			
			Post Data

			* User_Id  : 1
			* Question : Example Question?
			* Option A : Wrong Answer -1 Score
			* Option B : Wrong Answer -1 Score
			* Option C : Wrong Answer -1 Score
			* Option D : Correct Answer +1 Score
			* Answer   : D

			* User_Id  : 1
			* Question : Example Question?
			* Option A : Wrong Answer -1 Score
			* Option B : Correct Answer +1 Score
			* Option C : Wrong Answer -1 Score
			* Option D : Wrong Answer -1 Score
			* Answer   : B

			* User_Id  : 1
			* Question : Example Question?
			* Option A : Wrong Answer -1 Score
			* Option B : Wrong Answer -1 Score
			* Option C : Correct Answer +1 Score
			* Option D : Wrong Answer -1 Score
			* Answer   : C

			* User_Id  : 2
			* Question : Example Question?
			* Option A : Correct Answer +1 Score
			* Option B : Wrong Answer -1 Score
			* Option C : Wrong Answer -1 Score
			* Option D : Wrong Answer -1 Score
			* Answer   : A

			* User_Id  : 2
			* Question : Example Question?
			* Option A : Wrong Answer -1 Score
			* Option B : Wrong Answer -1 Score
			* Option C : Correct Answer +1 Score
			* Option D : Wrong Answer -1 Score
			* Answer   : C

			* User_Id  : 2
			* Question : Example Question?
			* Option A : Wrong Answer -1 Score
			* Option B : Correct Answer +1 Score
			* Option C : Wrong Answer -1 Score
			* Option D : Wrong Answer -1 Score
			* Answer   : B

* Use the default data to SignIn or you can Register manually by visting the HomePage and entering your details.
			
-----------------------------------------------------------------------------------

####Enjoy the website. Cheers:smile: