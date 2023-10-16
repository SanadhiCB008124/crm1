#  CRM System for POINT Shoe-selling Ecommerce Platform

![Project Image](https://github.com/SanadhiCB008124/crm1/blob/master/public/images/homepage-capture.png?raw=true)
![Project Image](https://github.com/SanadhiCB008124/crm1/blob/master/public/images/analytics.png?raw=true)
![Project Image](https://github.com/SanadhiCB008124/crm1/blob/master/public/images/analytics2.png?raw=true)
## Table of Contents

- [Introduction](#introduction)
- [My Report](#my-report)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Technologies used](#technologies-used)
- [Features of "POINT"](#features-of-point)
- [Analytics provided by the CRM System](#analytics-provided-by-the-crm-system)
- [Notes](#notes)
- [License](#license)

## Introduction

In the dynamic world of ecommerce, building and sustaining strong customer relationships is crucial for long-term success. Enter our sophisticated Customer Relationship Management (CRM) system designed specifically for our premium shoe-selling ecommerce platform "POINT" .

## My Report
[click here to view the report](https://github.com/SanadhiCB008124/crm1/blob/master/SANADHI%20CORRECT%20SEM%202%20PHP%20REPORT.pdf)


## Prerequisites
1. PHP 8 or higher
2. Composer 
3. Node.Js
4. NPM
5. WAMPP or XAMPP Server can be used.
   
## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/SanadhiCB008124/crm1.git
   ```
2. Install dependencies:
 ```bash
 composer install && npm install && npm run dev
 ```
3. Configure your environment variables:
 ```bash
cp .env.example .env
```
4. Run migrations:
 ```bash
php artisan migrate
 ```
5. Serve the application:
  ```bash
php artisan serve
 ```
6. Run the build:
 ```bash
 npm run dev
  ```

## Technologies used

#### Laravel Jetstream
- A robust application scaffolding providing pre-built authentication for access control.

#### Livewire
- A full-stack framework for Laravel, enhancing development speed for dynamic interfaces and reactive components.

#### Tailwind CSS
- A utility-first CSS framework for building modern and responsive user interfaces directly in markup.

#### Daisy Tailwind UI
- A Tailwind CSS extension providing a collection of customizable and ready-to-use UI components.

#### Alpine.js
- A minimal JavaScript framework seamlessly integrated with Laravel and Livewire for enhanced interactivity.

#### Chart.js
- A JavaScript library for creating interactive and visually appealing charts and graphs.

#### Mailtrap
- A service for testing email functionality in development environments.

#### MySQL Database
- The chosen database management system for holding and retrieving data in the CRM.

## Features of "POINT"

-Intuitive E-commerce Platform: A user-friendly interface for seamless browsing and purchasing of shoes.

-User Authentication: Secure your personal space with a robust user login system. Enjoy personalized features and a tailored shopping experience once you have registered an account and have logged in.

-Advanced Search Functionality: Powerful search options based on shoe names, colors and sizes for a refined shopping experience.

-Advanced Filter Functionality: Powerful search options based on shoe names, colors and sizes for a refined shopping experience.

-Comprehensive Product Details: Detailed descriptions and availability status to provide customers with complete information about each shoe.

-Effortless Cart Management: Intuitive cart interface for users to easily add, remove, and edit selected shoes before checkout.

-Saved Cart Sessions: Enable users to save their shopping carts for future visits, promoting a convenient and personalized shopping experience.

-Secure Checkout Process: Implement a secure and streamlined checkout process with multiple payment options, ensuring customer trust and satisfaction.

-Order Summary: Display a clear and detailed order summary, including itemized lists, quantities, and prices, for transparent transactions.

-Real-time Price Calculation: Dynamically calculate and display the total price, including taxes and shipping fees, as customers modify their cart.

-Discount Support: Allow  discounts during the checkout process, incentivizing purchases.

-Order Confirmation: Send automated order confirmation emails with detailed information, creating a sense of reassurance and transparency.

-Order History: Enable users to view their previous order and re-order for a more convenient shopping experiance.

-Customer Relationship Management (CRM) System: An efficient CRM system to manage and nurture customer relationships effectively.

-Centralized Customer Data: Store and organize customer information, including contact details and purchase history, in one central location.

-Personalized Recommendations: Utilize customer data to offer personalized shoe recommendations, enhancing the shopping experience.

-Order Management: Real-time tracking of order status, allowing customers to monitor their purchases at every stage.

-Analytics and Reporting: Powerful analytics and reporting capabilities for data-driven insights, aiding in strategic decision-making.

-Mobile Responsiveness: Ensure a smooth and responsive cart and checkout experience across various devices, including mobile phones and tablets.
 
## Analytics provided by the CRM System

### Importance of Analytics
Analytics play a crucial role in fortifying business intelligence and facilitating informed decision-making in the dynamic landscape of modern commerce.

### A. Financial Metrics
- Average Order Value
- Product Revenue
- COGS (Cost of Goods Sold)
- Profit Margin

### B. Operational Metrics
- Checkouts Per Day, For the past week and Month
- Top 5 Most Added to Cart
- Top 5 Most viewed Products
- Least Viewed Product
- Logins Per Day

### C. User Engagement Metrics
- Total Site Registrations
- Total Site Registrations per day , For the past week and Past month.
- Total Online Registrations per day , For the past week and Past month.
- Total Checkouts.
- Total Checkouts per day , For the past week and Past month.
- Total Orders
- Least Added Product to Cart

### D. Product Sales Metrics
- Most Sold Colors, Categories, and Sizes

### E. User Behavior Metrics
- Logins Per Day
- Average Session Rate
- Abandoned Cart Rate

### F. Inventory Metrics
- Inventory Turnover Rate

## Notes
Users have a role id to give the users the role types of "Admin" and  "Customer".

Admin : role id = 0

Customer :role id = 2

## License

https://opensource.org/license/mit/


Happy coding! 🚀

