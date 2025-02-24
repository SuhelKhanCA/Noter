# **Noter - Documentation**

## **Project Overview**
**SuhelKhanCA Noter** is a web-based note management application that allows users to create, edit, summarize, generate, and manage notes. It supports public and private notes, user authentication, admin features, and integration with OpenAI APIs for automatic note generation and summarization.

---

## **Directory Structure**

```plaintext
suhelkhanca-noter/
├── add_note.php                # Handles the addition of new notes.
├── admin_publicnotes.php       # Admin view of public notes.
├── admin_user_notes.php        # Admin management of user-specific notes.
├── admin_viewnotes.php         # Admin interface to view all notes.
├── ai.php                      # AI integration for generating or summarizing notes.
├── completeinfo.php            # Displays detailed information for a specific user/note.
├── completely_delete.php       # Permanently deletes notes or user data.
├── dbconnect.php               # Database connection setup.
├── edit_note.php               # Frontend for editing notes.
├── edit_note_backend.php       # Backend logic for editing notes.
├── footer.php                  # Footer component for web pages.
├── generate_notes.php          # Backend logic for generating notes via OpenAI.
├── index.php                   # Homepage of the application.
├── log-footer.php              # Footer for login pages.
├── login.php                   # User login page.
├── logout.php                  # User logout logic.
├── makeprivate.php             # Converts a public note to private.
├── makepublic.php              # Converts a private note to public.
├── nav.php                     # Navigation bar for the app.
├── notes.php                   # Displays user-specific notes.
├── publicnotes.php             # Displays all public notes.
├── register.php                # User registration page.
├── remove.php                  # Logic for removing notes.
├── removeUser.php              # Logic for removing user accounts.
├── repeal.php                  # Undo actions like delete or make private.
├── summerize_notes.php         # Backend for summarizing notes via AI.
├── temp_remove_user.php        # Temporarily removes user accounts.
├── use.php                     # Utility functions and common logic.
├── view_note.php               # Displays a single note in detail.
├── view_users.php              # Admin interface to view and manage users.
├── css/
│   ├── footer.css              # Styling for the footer.
│   ├── use.css                 # General-purpose styles.
│   └── materialize/            # Materialize CSS framework files.
├── img/                        # Directory for images.
└── js/
    ├── create_note.js          # JavaScript logic for note creation.
    ├── main.js                 # Main JavaScript file for global interactions.
    └── materialize/            # Materialize JavaScript files.
```

## Features

### User Features

* Create Notes: Add new notes with a title and description.
* Edit Notes: Modify existing notes.
* Public/Private Notes: Set notes to public or private.
* Summarize Notes: Use AI to summarize long notes.
* Generate Notes: Use AI to generate notes based on input.
* View Notes: Access public notes or personal private notes.

Admin Features

* Manage all public and private notes.
* View detailed information about notes and users.
* Permanently or temporarily delete users.
* Undo specific actions, like making a note private.

AI Integration

* Summarization: Summarizes lengthy notes for quick reference.
* Note Generation: Generates notes automatically using the OpenAI API.

Authentication

* User login and registration system.
* Secure logout functionality.

Technologies Used

Frontend

* HTML5 and CSS3 for the structure and styling.
* Materialize CSS for responsive design and pre-styled components.
* JavaScript for interactivity and dynamic functionality.

Backend

* PHP for server-side logic.
* MySQL for database management.

AI Integration

* OpenAI API for note generation and summarization.

Development Environment

* XAMPP on Windows for local server and database setup.

Installation and Setup

Requirements

* XAMPP installed on Windows.
* PHP 7.4+ and MySQL 5.7+.

Steps to Run

1. Clone the Repository:

```bash
git clone [https://github.com/SuhelKhanCA/suhelkhanca-noter.git](https://github.com/SuhelKhanCA/suhelkhanca-noter.git)
```

4. Start XAMPP:

   Start Apache and MySQL from the XAMPP control panel.

5. Set Up Database:

   Open phpMyAdmin at http://localhost/phpmyadmin/.
   Create a database (e.g., noter_db).
   Import the database schema provided in dbconnect.php or a .sql file.

6. Configure OpenAI API Key:

   Get an API key from OpenAI.
   Add the API key to ai.php:

```php
$openai_key = 'YOUR_API_KEY';
```
7. Access the Application:

Open your browser and visit http://localhost/suhelkhanca-noter.


## Usage

* **Register:** Sign up to create an account.
* **Login:** Use your credentials to access the dashboard.
* **Create Notes:** Add a note using the provided form.
* **Summarize or Generate Notes:** Use the AI features to enhance your note management.
* **Admin:** If logged in as admin, manage notes and users from the admin dashboard.

## Screenshots

Include screenshots of:

* Dashboard
* Create Note Page
* AI Features (Summarize & Generate)
* Admin Panel

(You can add your snapshots here for better documentation.)

## Future Enhancements

* Add a search bar for quick note lookup.
* Implement user roles for better access control.
* Include note categories for better organization.
* Integrate email notifications for reminders.

## Contact

Developed by Suhel Khan.

GitHub: SuhelKhanCA


# Snapshots

### Index
![image](https://github.com/user-attachments/assets/fc927f49-3c3d-41b4-9137-da79646137e3)

### Footer
![image](https://github.com/user-attachments/assets/6184cfad-3e51-4376-b665-9e57eb626474)

### Motivation and User manual info
![image](https://github.com/user-attachments/assets/9fb378d0-c657-46a3-88a0-00853436d19d)
![image](https://github.com/user-attachments/assets/f844cb48-8e19-4126-9178-06c6ba7c9851)

### Login Page
![image](https://github.com/user-attachments/assets/ec542276-d13c-4873-baf4-19b48d9aa1b5)

### Register
![image](https://github.com/user-attachments/assets/2c5fbe35-db13-43e4-bfcb-460a0f181392)

### Notes Page
![image](https://github.com/user-attachments/assets/8eb9970f-5a75-48d5-87f4-1c335cdbb93b)

### Create Note
![image](https://github.com/user-attachments/assets/92956302-f5f1-48e0-833b-70a63e5e5d76)

### Public notes
![image](https://github.com/user-attachments/assets/505a340f-cde6-4b5c-a390-a0b54237bc8d)

### View Notes
![image](https://github.com/user-attachments/assets/5b8957a4-4e82-4d98-92e1-c24b5bddf661)


## Admin Modules
### View Notes
![image](https://github.com/user-attachments/assets/02d48a0a-29ee-4a27-be3f-519ca39d3b0d)

### Notes Info
![image](https://github.com/user-attachments/assets/54ea6bdb-a427-4a7b-ae62-bcad8406d94e)

### Removed user
![image](https://github.com/user-attachments/assets/34d3a1a7-423d-49d8-8089-b323f842b2ac)
