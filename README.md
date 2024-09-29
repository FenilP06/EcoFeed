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

![01](https://github.com/user-attachments/assets/95f88b87-49d7-4f7d-8088-2463d10d001d)
  1. HOME PAGE

![02](https://github.com/user-attachments/assets/436ce9ac-d86b-4bef-a83d-b6305802b5dc)

  2. HOME PAGE

  
![03](https://github.com/user-attachments/assets/e43010f1-c614-4933-a367-e8613882945d)

  3. HOME PAGE


![04](https://github.com/user-attachments/assets/817d1db3-623a-4899-9099-3266a6f8959d)

  4. About Us


![05](https://github.com/user-attachments/assets/86cfc224-c216-4648-9d45-b3beca1d0a23)

  5. Gallery


![06](https://github.com/user-attachments/assets/d5f82dea-b2c0-47d5-93c2-e072d095fe28)

  6. Contact Us


![07](https://github.com/user-attachments/assets/b1aed404-025e-481e-a1fc-b00b10e5b5f8)

   7. Admin SignIn


![08](https://github.com/user-attachments/assets/09b9bf1f-d657-48fb-a7d3-5f15f7a911d8)

   8. User SignIn

  
![09](https://github.com/user-attachments/assets/09e1ea87-0270-4384-aa0c-816d685638a4)

   9. User Registration

 
![10](https://github.com/user-attachments/assets/58310883-d933-43e2-9f95-cee0ee7ae27e)

   10. Forgot password


![14](https://github.com/user-attachments/assets/fa5b34dd-8c57-46d6-b951-fe6b6b59ad10)

   11. User Register list

![15](https://github.com/user-attachments/assets/e45c82f8-a85f-4fb5-88f2-7d39b6f479a7)

   12. User Registration Edit


![20](https://github.com/user-attachments/assets/84978ddc-4f81-4227-bad3-26a78ecc6d7c)

   13. Donar Master Insert

 
![32](https://github.com/user-attachments/assets/c8f12345-84d8-4f43-8790-408fd0e7fefe)

   14. Waste Request


![33](https://github.com/user-attachments/assets/dac212ad-3692-4676-bd71-035169c30eb7)

  15. Pending waiting request


![34](https://github.com/user-attachments/assets/b276ca87-fa55-40cf-a0ee-f270855e8231)

   16. Approval waste request

![37](https://github.com/user-attachments/assets/46f9d778-5d4a-491e-b4c8-e49dd2ae6130)

   17. Quantity Update


![38](https://github.com/user-attachments/assets/fbc067a8-3a60-4756-ae7b-2280d147d022)

   18. Collection Report

 
![41](https://github.com/user-attachments/assets/c02f764b-3a79-4b0c-97b7-34201b965a33)

   19. Slurry Request


![42](https://github.com/user-attachments/assets/1ea2e78f-4679-425a-9c5c-a3c8d2f13b6f)

   20. Total Slurry


![43](https://github.com/user-attachments/assets/18d7a018-c5c5-4a01-af2f-108eadeeeb9b)

   21. Approve Slurry Request


![46](https://github.com/user-attachments/assets/17b3960a-55e3-4706-9377-4b6ebb161477)

   22. Distribution Records

![47](https://github.com/user-attachments/assets/79c30251-acd4-412d-9dbf-971057c7947f)

   24. Feedback

 
![47](https://github.com/user-attachments/assets/795446c2-7650-4d2a-a708-6ab52760012d)
  23. Feedback



