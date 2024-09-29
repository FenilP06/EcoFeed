## Project Name : EcoFeed


# Project Statement : Tackling Food Insecurity and Waste through a Seamless Food Redistribution Platform

## Full video of Project :

https://github.com/user-attachments/assets/4095f3cf-260d-4f09-9e18-030066f513fe

### Description : 
Our platform focuses on efficiently redistributing surplus edible food by connecting donors, NGOs, and volunteers. When donors provide excess food, the platform categorizes it as edible and immediately assigns it to nearby NGOs for collection and distribution to needy individuals. This real-time coordination ensures that surplus food reaches communities in need quickly, minimizing spoilage and maximizing the positive impact of food donations. By streamlining the donation and distribution process, we help reduce food waste and combat hunger in underserved populations.



## Proposed Solution :
Our platform focuses on efficiently redistributing surplus edible food by connecting donors, NGOs, and volunteers. When donors provide excess food, the platform categorizes it as edible and immediately assigns it to nearby NGOs for collection and distribution to needy individuals. This real-time coordination ensures that surplus food reaches communities in need quickly, minimizing spoilage and maximizing the positive impact of food donations. By streamlining the donation and distribution process, we help reduce food waste and combat hunger in underserved populations.

## Challenges (Cons) Identified :
### 1. Late-Night Food Donations
One of the significant issues we encountered is that many food donations from donors arrive late at night or during midnight hours. At this time, most of the needy individuals we aim to serve are either asleep or not in immediate need of food. By morning, the food often spoils if it cannot be distributed quickly, adding to the food waste problem instead of alleviating it.

### 2. Inedible or Spoiled Food
Another challenge arises when donations include food that is half-eaten, spoiled, or otherwise inedible. While we aim to distribute surplus edible food, the presence of inedible or unusable food creates logistical difficulties and further contributes to waste.

## Solution to Overcome These Challenges
To address these challenges, we plan to implement an additional module focused on converting inedible food into slurry (fertilizer) through biogas plants. This module will collect spoiled or unusable food and send it to biogas facilities, where it will be processed and transformed into slurry. This slurry will then be distributed to local farmers, turning food waste into a valuable agricultural resource. By doing so, we can ensure that even food that cannot be consumed is repurposed in an environmentally friendly way, helping both farmers and the ecosystem, while minimizing overall waste.

## Flow Diagram
![flow_diagram](https://github.com/user-attachments/assets/f142d0d1-d119-4fed-9063-edbadb7b00a3)

## Features :
1. Admin :
   - Assign all codes for each user after verification.
   - Accept/Decline Food wastage collection request.
   - Edit/Remove collection process or data.
   - Accept/Decline Slurry request made by farmer.
   - Edit/Remove Distribute process or data.
   - Modify any user profile.
2. Donar :
   - Edit their profile information anytime.
   - Request to admin for pickup food waste.
   - Track or see details of collection process.
   - Access and download reports of collection process.
3. Volunteer :
   - Edit their profile information anytime.
   - Track details where to collect food wastage and where to distribute food.
   - Collect and Ditribute the food wastage.
   - Get notfied whenever task assign to them.
4. Transporter :
   - Edit their profile information anytime.
   - Track details where to collect food wastage and where to distribute food with volunteer detials.
   - Get notfied whenever task assign to them.
5. Bio-Plant :
   - Edit their profile information anytime.
   - Get details about food wastage quantity and voluteer and transporter details at collection time.
   - Update the Total slurry genrated.
   - Get Details about farmer whom to distribute the slurry.
6. Farmers :
   - Edit their profile information anytime.
   - Can request for slury
   - Collect their slury from the biogas plant


## Technologies Used :

- WAMP: Local development environment using Windows, Apache, MySQL, and PHP.
- HTML: For structuring and building the layout of web pages.
- CSS: For styling and designing the user interface.
- JavaScript: For adding interactivity and client-side logic.
- PHP: For server-side programming and managing backend functionality.

## Installation Instructions :

1. Install WAMP from the [WAMP Official Website.](https://www.wampserver.com/)
```
git clone https://github.com/FenilP06/EcoFeed
```
2. Move the project files to the ```WWW``` directory inside your WAMP installation folder.
3. Start the WAMP server.
4. Open your web browser and go to ```http://localhost/your-project-directory``` to access the platform.

## Database Setup :
1. Open phpMyAdmin (accessible via WAMP).
2. Create a new database named ```ecofeed```.
3. Import the provided SQL file.
4. Update the database connection settings in ```config.php:```
```
$servername = "localhost";
$username = "root";
$password = "";  // Your MySQL root password
$dbname = "food_redistribution";
```
## Future Enhancements :
  - AI-based food classification for automatic sorting of food donations.
  - Mobile app for easier access and real-time notifications.
    
## Screen Layout :

![01](https://github.com/user-attachments/assets/e0935e4d-f7d3-404e-ba7f-36c978f093fb)
  1. HOME PAGE

![02](https://github.com/user-attachments/assets/15a8b09a-4519-43b9-8f5a-7aba93e9b029)
  2. HOME PAGE

  
![03](https://github.com/user-attachments/assets/939d4915-72e9-42ab-9c84-34d908666e56)
  3. HOME PAGE


![04](https://github.com/user-attachments/assets/f1121f96-645e-420f-b7f8-c839c05f3363)
  4. About Us


![05](https://github.com/user-attachments/assets/65f0f5cd-9cef-4b22-8d9d-c619cc335571)
  5. Gallery


![06](https://github.com/user-attachments/assets/b334217b-0a91-42ba-b661-113b7372c2cd)
  6. Contact Us


![07](https://github.com/user-attachments/assets/13adcd6e-5907-486c-bfd5-7ead5e549a28)
  7. Admin SignIn


![08](https://github.com/user-attachments/assets/43a9e0d1-bfc4-43c1-a62e-c237b651bca7)
  8. User SignIn

  
![09](https://github.com/user-attachments/assets/819c0aaf-e5b6-4836-baef-87a50da7c992)
  9. User Registration

 
![10](https://github.com/user-attachments/assets/f70a4f56-db78-4c6c-9568-2c8250e71865)
  10. Forgot password


![14](https://github.com/user-attachments/assets/d4a3c289-2b42-4291-80c8-1f22d9b34d58)
  11. User Register list


![15](https://github.com/user-attachments/assets/4193ba20-edb2-44ef-922a-c8fcc70ae6a8)
  12. User Registration Edit


![20](https://github.com/user-attachments/assets/3b1491d2-c46f-4766-8a76-70b8dabcaee9)
  13. Donar Master Insert

 
![32](https://github.com/user-attachments/assets/90ffcef3-b600-4912-957a-2f6d9375167e)
14. Waste Request


![33](https://github.com/user-attachments/assets/180fb288-d27c-40f3-8539-ca85acd8dde7)
  15. Pending waiting request


![34](https://github.com/user-attachments/assets/b1711e4a-3aea-470f-8ae3-cd930d8fb5fc)
  16. Approval waste request

 
![37](https://github.com/user-attachments/assets/a1307657-438c-4ddc-9e0d-81b97fa1fcef)
  17. Quantity Update


![38](https://github.com/user-attachments/assets/bbc37a19-c1b9-4f1c-9f67-2aeba4d8bfac)
  18. Collection Report

 
![41](https://github.com/user-attachments/assets/2f728220-02fa-4327-99a0-be64849ec6e4)
  19. Slurry Request


![42](https://github.com/user-attachments/assets/558113d2-3ee9-483a-89af-ad17d7ad0b2d)
  20. Total Slurry


![43](https://github.com/user-attachments/assets/f76fa301-2b78-4ddf-8111-d7c47c549e6c)
  21. Approve Slurry Request


![46](https://github.com/user-attachments/assets/c1be4bd7-c357-4647-90f8-5a11dee266f3)
  22. Distribution Records

 
![47](https://github.com/user-attachments/assets/795446c2-7650-4d2a-a708-6ab52760012d)
  23. Feedback



