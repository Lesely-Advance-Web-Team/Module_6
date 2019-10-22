# Deliverable Explanation Module_6
## Custom CMS Group Project

>   ### Alternate Assignment Deliverables
> **For the alternate assignment for this module, you sill design a Custom CMS. You will submit the written paper as a GitHub repository URL so you will still work through the git workflow, but instead of writing code, you can submit Markdown files with your design documented. Here are the requirements:**

---

**You may design any CMS that you want:**

Be creative, but also remember that you only have a week to complete the assignment. A CMS does not have to be a blog, you could build a Recipe book CMS, or a Photo Album etc. Using PHP templating, you can take any input and generate content!
- **What kind of CMS are you creating?**
  - We are creating a Photo Album CMS about visited locations.

---

**You must describe the Server-side code:**
- **What will your server-side code look like?**
  - The server-side codes looks like… 
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
    - We the format of our code includes several practices of the DRY method. We used PHP and this helped manage and simplify our code. If there were areas that we thought would repeat itself we created another document to put that function in, to be called upon in other files. We used it for our header, nav, and footer by doing the following in the page:
    
`<?php include 'header.php' ?>`
`<?php include 'nav.php' ?>`
`<?php include 'footer.php' ?>`

--- 

**You must design a Database:**
- **What tables will you have in your database?**
  - ID, Image, Title, Author, Location, Date, Description
- **What kind of CRUD operations will you perform to manipulate the data?**
  - Some CRUD operations that we’d perform to manipulate the data are…
- **What role does Security play in your Blog CMS? Why is it important to protect this database?**
  - Security is a must have and the we have placed security in our Blog CMS by… It is important to protect this database because…
---

**You must design the Client-side code:**
- **What will your client-side code look like?**
  - Our client-side code looks like…
- **What kinds of functionality would it be better to do on the client side rather than on the server?**
  - Some functionalities that would be better to do on the client side rather than on the server are…
- **What kind of POST requests would you have in your Blog CMS?**
  - The types of POST requests that is inserted into our Blog CMS would allow users to share their location experiences when they travel. They would share an image, give a title, their alias so we know who it is from. They’d also share the location, date, and a brief description of their experience.
---

**You must use Github workflow:**
- Create a Github organization for your team
  - Create a team repo owned by the organization
  - Use GIT fork, pull requests, merge workflow
  - Write your response in Markdown format
  - (Optional) Use Github Projects to track your work
