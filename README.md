
## Project Name: Task Management System
##  By Team C4M 
## Team Members
1. Choo 
2. Gordian
3. Mihoko
4. Mahsa

### Project Description: 
 
Team C4M proposes a task management system to help teams of people coordinate their efforts when working together on a group project. Users can sign up for accounts, create new teams and join existing teams. A team can create projects which are broken down into discrete tasks or objectives. These tasks and objects will be assigned to members of the team to work on. Once a task has been completed, the member responsible for it can mark it as such on the system for the other members to see.
 
Our system will track deadlines and notify members of upcoming due dates. Our system will also have messaging and document exchange features for team members to communicate with each other and transfer information to other members.


## Design & Tools
- [x] Boostrap 
- [x] CSS
- [x] PHP
- [x] Javascript
- [x] Composer,Packagist(phpmailer)

## Features

### CRUD 1: Project CRUD (Choo)

#### Description
- User can create a new project with information including, project name, start date and description. Users allow to edit the project information as well as delete the project. 

#### Learning Curve
- Struggling to retrieved and update project timestamp from database

#### Overcome
- Data type for project timestamp retrieved data and update data have to be the same format : "2021-03-01 10:41:06"

#### What's Next
- Improve usability interface 

---
### CRUD 1: Member CRUD (Choo)

#### Description
- User can add member on created project from the registered user list with designated role added too. Users allow to edit the edit the role of the member and remove member from the selected project. 

#### Learning Curve
- Some variables do not carry the value and having issue on validation
- Duplicate insert of same member to the list
- Not able to display error message on its box 

#### Overcome
- Since it is on client render part,use JavaScript to keep track on which value is selected before submission. 
- Set user’s id and project’s id [Both are foreign key] as primary key and unique, then use INSERT …. DUPLICATE UPDATE ON query.

#### What's Next
- Try to improve my functions that render the update and add table on same page. 
- Try to fix the position of the error message box from update to add section.

---

### GORDIAN MOK'S CONTRIBUTION

#### Features

- User-specific notifications (/Model/Notifications.php)
- Upcoming due dates report for each user (/Model/UpcomingDueDates.php)
- Task Progress bar display for each task (/Model/TaskProgress.php)
- Emailer feature using PHPMailer (/Model/Emailer.php)
- Header (/views/partials/header.php)
- Footer (/views/partials/footer.php)
- Sidebar (/views/partials/header.php) [superceded]

#### Description
- Notifications displays in the sidebar the number of tasks that are past due or will become due in the next 7 days
- Upcoming Due Dates feature displays in the sidebar the tasks that will be due in the near future, the title, and due dates
- Task Progress creates a progress bar to display the progress of the project in visual form by calculating the tasks that have been marked as Done or Cancelled and comparing that with the number of overall tasks outstanding in the project
- Emailer is a class method to support other features by sending emailed notices or confirmations to users
- Header, Footer and Sidebar are functions that generate dynamic HTML content for the header, footer and sidebar

#### Learning Curve
- Learning curve for this project was medium

#### Overcome
- SQL datetime data and PHP datatime data type are not entirely compatible and so techniques were researched to convert SQL datetime data into a form that is recognized by PHP
- SQL queries were designed to efficiently obtain the needed data and filter out data that is not required, thereby reducing the data processing workload required in PHP
- Research into HTML and Bootstrap progress bar element was educational

#### What's Next
- Styling improvements 
- Expand the functionality of the Notification and Upcoming Due Dates features to display more useful information to the user
