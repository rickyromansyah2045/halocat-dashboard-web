# The Cloud Donation - FE

This github repository is the frontend application for The Cloud Donation's website.

## About The Cloud Donation

The Cloud Donation proposes a cloud-based donation platform that leverages the latest technologies to simplify the donation process and provide increased anonymity and security for donors. The platform will allow donors to make a donation anonymously without the need for personal information. Donors will be able to choose from various payment options, including credit card, bank transfer, or mobile payment. The platform will be designed to be user-friendly, secure, and easily accessible on any device.

By leveraging cloud technologies and innovative features, the platform can help bridge the gap between donors and non-profit organizations, enabling more effective and efficient charitable giving.

## Useful Links

You can immediately see the project we have made in the following links:

- FE: https://thedonation.cloud (this repository)
- BE: https://be.thedonation.cloud (github repository: https://github.com/ZihxS/thecloud-go)

## Another Useful Links

- Home Page: https://thedonation.cloud
- List of Donations or Campaigns Page: https://thedonation.cloud/donations
- About Page: https://thedonation.cloud/about
- Register Page: https://thedonation.cloud/auth/register
- Login Page: https://thedonation.cloud/auth/login
- Forgot Password Page: https://thedonation.cloud/auth/forgot-password

## CMS (User Area) Useful Links

- User Dashboard: https://thedonation.cloud/user/dashboard
- User Campaigns Data: https://thedonation.cloud/user/campaigns
- User Transactions Data: https://thedonation.cloud/user/transactions
- User Account Settings: https://thedonation.cloud/user/settings
- User Wallet Management: https://thedonation.cloud/user/wallet
- Logout: https://thedonation.cloud/auth/logout

## CMS (Admin Area) Useful Links

- Admin Dashboard: https://thedonation.cloud/admin/dashboard
- Data Users: https://thedonation.cloud/admin/users
- Data Categories: https://thedonation.cloud/admin/categories
- Data Campaigns & Winners Exclusive Campaigns: https://thedonation.cloud/admin/campaigns
- Data Transactions: https://thedonation.cloud/admin/campaigns
- Data Company Cash Flow: https://thedonation.cloud/admin/company-cash-flow
- Data Withdrawal Requests: https://thedonation.cloud/admin/withdrawal-requests
- Admin Account Settings: https://thedonation.cloud/admin/settings
- Admin Wallet Management: https://thedonation.cloud/admin/wallet
- Data Activity Logs: https://thedonation.cloud/admin/logs/activity
- Logout: https://thedonation.cloud/auth/logout

## How To Run On Local Machine

Requirements:

- PHP Version 7.0+ And Below Version 8.0
- Composer 2.5+

If you really want to run it yourself on your local machine, you can follow these steps:

1. ```git
    git clone https://github.com/ZihxS/thecloud-ci.git
    ```
2. ```
    mv thecloud-ci ~/Path/To/Local/Server && cd ~/Path/To/Local/Server
    ```
    **example**:
   ```
    mv thecloud-ci ~/Applications/MAMP/htdocs && cd ~/Applications/MAMP/htdocs
    ```
3. ```
    composer install
    ```
4. ```
    cp .env.example .env
    ```
    > **The original .env file is in the submission folder that we have sent**. You can also get the original .env file by chatting to the following WhatsApp: https://wa.me/628974842870.
5. Start Your Local Server
6. Open Your Favorite Browser
7. Point Your Website On URL Bar
8. Enjoy and Happy Explore! **#TheCloudFirstWinner**

## Tech Stack
- Apache (For Local Development)
- Nginx
- HTML
- CSS
- JavaScript
- jQuery & Ajax
- Bootstrap Version 4
- PHP With CodeIgniter Version 3

## Alibaba Cloud Products Used
- ApsaraDB For PolarDB
- DMS For Manage PolarDB
- Domain (**thedonation.cloud**)
- Simple Application Server
    - 4vCPUs - 16GB Memory - System Disk 400GB ESSD - Indonesia (Jakarta)
    - Instance ID：36fcbb610e3d4c3c814be5a3b5422daf
    - Image Information: Ubuntu 20.04
    - Expires on: May 21, 2023 at 23:00:00

## PolarDB Feature Used

- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/hot-row-optimization
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/parallel-query-parallel-query
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/fast-query-cache
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/left-join-elimination
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/join-condition-pushdown
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/ptrc
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/enable-binary-logging
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/ddl-asynchronous-i-or-o
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/recycle-bin
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/statement-concurrency-control
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/thread-pool
- https://www.alibabacloud.com/help/en/database-autonomy-service/latest/automatic-sql-optimization
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/prevent-long-running-transactions-on-read-only-nodes-from-blocking-ddl-operations
- https://www.alibabacloud.com/help/en/polardb-for-mysql/latest/view-the-execution-status-of-ddl-statements-and-metadata-locking

## Contacts

- https://www.linkedin.com/in/muhammad-saleh-solahudin-8444171b2 or https://wa.me/628974842870
- https://www.linkedin.com/in/ricky-romansyah-47831518b
- https://www.linkedin.com/in/rifkihimawan