# VirusWatchtower
A web app that displays a list of computer viruses, how to Identify them, how to prevent them, and how to get rid of them


# How to run the project
1. Install Dependencies: make sure you have the following installed: nodejs, php, xampp, composer, laravel, git (Install them in this order)

2. After Installing the above tools, open the start menu and search for xampp control panel, open it and start the first two services(Apache, and Mysql). make sure the port numbers and PID numbers are showing for the each of the services you started. Do not close the xampp control panel, unless you're done with the project. repeat this anytime you want to run the project

3. navigate to your local disk folder(usually C:\), you'll see the xampp folder. Open the xampp folder, inside the xampp folders you'll see the htdocs folder. Open the htdocs folder, inside the htdocs folder, you'll see some files and folders, delete everything. Then open a terminal in the htdocs folder/directory. clone the project by typing the following command: git clone https://github.com/Osamor-Chukwuka/VirusWatchtower.git. After successfully cloning the app, you'll see the app folder inside the htdocs folder

4. Open the app folder, inside the app folder, open the terminal(make sure your terminal shows that you're in the app directory) and type the following command: composer install. This will install all the dependencies for the project. also type the following command npm install.
After running the above commands, open two more terminal in your project directory (by this time you should have 3 opened terminal. Make sure all three terminal shows that you're in your app directory ). In one of the terminal run the following command: npm run dev. the command will start the development server (do not close this terminal). go to the next terminal and type the following command: php artisan serve. this command will serve your app locally, after running this command you will see a link like http://127.0.0.1:8000, copy the link and paste it in your browser, you will see your app running.(do not close this terminal). Next, move to the last(3rd) terminal, and run the following command: php artisan migrate --seed. if you get a message saying this database does not exisit do you want to create one? type yes and click enter. This will create the database. 

5. Congrats, you've setup your app, visit the app on your browser and enjoy

NOTE: I've automatically seeded(added) some virus details, and I've automatically created an admin account. The admin email is admin@gmail.com, the password is admin@123. As an admin you can add new viruses.