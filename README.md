# Deliverable Explanation Module_6
## Custom CMS Group Project

>   ### Alternate Assignment Deliverables
> **For the alternate assignment for this module, you sill design a Custom CMS. You will submit the written paper as a GitHub repository URL so you will still work through the git workflow, but instead of writing code, you can submit Markdown files with your design documented. Here are the requirements:**

---

**You may design any CMS that you want:**

Be creative, but also remember that you only have a week to complete the assignment. A CMS does not have to be a blog, you could build a Recipe book CMS, or a Photo Album etc. Using PHP templating, you can take any input and generate content!
- **What kind of CMS are you creating?**
  - We are creating a Blog CMS about visited locations.

---

**You must describe the Server-side code:**
- **What will your server-side code look like?**
  - The server-side codes looks like… 
    - This diagram represents server-side and client side-code 
    ![alt text](https://designmanagementlucerne.files.wordpress.com/2015/11/client-server-side.png?w=552&h=285 "Server-side Code vs Client-side Code")
    - Server-side code is going to run on Apache server via WAMP and will have php DRY code. It will start off by html at the top and include the php files to supoort the site.

- **What files and functions will you have?**
  - Some files and functions that would be included would be the following:
    - Images – to store images included in the CMS.
    - Index – The skeleton of the home website.
    - Header – To store the header details and format.
    - Footer – To store the footer details and format.
    - Nav – To store the menu titles, links, and format.
    - Post – For each post to so there is a link for each one.
    - Post-Submission – The area in where visitors’ cans submit a post to the blog. This information will get sent to the server and stored in the database for it to be displayed in the site.
  
- **How will you keep your code DRY?**
    - We the format of our code includes several practices of the DRY method. We used PHP and this helped manage and simplify our code. Like using functions to pull from the database such as `function getPostTitlesFromDatabase()`. Also, If there were areas that we thought would repeat itself we created another document to put that function in, to be called upon in other files. We used it for our header, nav, and footer by doing the following in the page:
    
    `<?php include 'header.php' ?>`
    
    `<?php include 'nav.php' ?>`
    
    `<?php include 'footer.php' ?>`

--- 

**You must design a Database:**
- **What tables will you have in your database?**
  - Our table "post" will have the following feilds: ID, Title, Author, Location, Date, Content. ID was set to AI & Primary.


| # | Name     |   Type   |
| - |:--------:| --------:|
| 1 | ID       | int(11)  |
| 2 | Title    |   text   |
| 3 | Author   |   text   |
| 4 | Location |   text   |
| 5 | Date     |   date   |
| 6 | Content  | longtext |

- **What kind of CRUD operations will you perform to manipulate the data?**
  - Some CRUD operations that we’d perform to manipulate the data was
  - `CREATE DATABASE mod6_blog_cms` 
    - View screenshot of above: https://drive.google.com/file/d/1tEQAb-81BYi3t5c6syW6CGJhSwSqKqoz/view?usp=sharing
  - `INSERT INTO `posts` (`ID`, `Title`, `Author`, `Location`, `Date`, `Description`) VALUES (NULL, 'Fun Times in Miami!', 'Victoria BM', 'Florida, Miami', '2019-10-01', 'We had so much fun in Miami! We went to south beach and meet Tom Cruz and drank lattes. The Best!');`
  
- **What role does Security play in your Blog CMS? Why is it important to protect this database?**
  - Security is a must have and the we have placed security in our Blog CMS by securing it with a strong password. We also utilized GitHub security tab to see if there were are vulnerabilities. Also, only authorized users of this group can access this information. It is important to protect this database because our system can be compromised. <b>Attackers</b> can end up writing their own scripts and turn your world and/or your clients world upside down. 
---

**You must design the Client-side code:**
- **What will your client-side code look like?**
  - Our client-side code includes JS which accesses content from the DOM. Our code includes the code: `document.getElementsByTagName('body')` which returned the body node from the DOM. We also used `getElementById` to get elements with the matching ID and to get elements with matching class we used `getElementsByClassName`
- **What kinds of functionality would it be better to do on the client side rather than on the server?**
  - Functionalities that would be better to do on the client side rather than on the server, would be simple interactions such as allowing the user to sort their table or put filters on their images they plan to upload. These actoins will be much faster on the client-side.
- **What kind of POST requests would you have in your Blog CMS?**
  - The types of POST requests that is inserted into our Blog CMS would allow users to share their location experiences when they travel. They would share post that has a title, their alias (<i>so we know who it is from</i>). They’d also share the location, date, and a brief description of their experience.
---

**You must use Github workflow:**
- Create a Github organization for your team ( We did this by doing the following below)
  - Create a team repo owned by the organization
  - Use GIT fork, pull requests, merge workflow
    - View screenshot of above: https://drive.google.com/file/d/1kqnxDxT42SPhn-AYarn9aVjf4kedUd7L/view?usp=sharing
  - *Write your response in Markdown format*
