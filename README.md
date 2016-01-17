# shopCart
A shopping cart which allows users to add items, remove items, and check items out.

1.
### Purpose of this software

The overall purpose of “shopCart” is a to allow user selection (including addition and removal) of shopping cart items given a specified list of items (with photos, quantities, and prices for each) in addition to a checkout feature, whereby the user is able to pay for said items via PayPal.

Secondary features of the “shopCart” software include user login and logout, forgotten password recovery, password change, session and cookie-based user information and web pages, and user validation via Captcha implementation.

1.1
###Benefits of the Software:

The shopCart page allows users to add, remove, and checkout items for purchase. The overall benefit of the software is that it allows users to shop from the comfort of their homes online; it serves as a quicker and more efficient alternative to a physical store.

1.2
###Objectives of the Software:

The overall objective for this software is to allow users to register, login to the site, and add and remove cart items; secondary objectives include additional user functionality (logout, password change, retrieving forgotten password, clearing the shopping cart, receiving a total cost, etc.)

1.3
###Goals for this Software:

One of the major goals for this software is a user-friendly interface. Page-width divs, tables with alternating row-background-colors, and buttons are used so that users can easily see page contents and are aware of what clicking each link does. For example, the implementation of “+” and “-“ buttons for each item allows the user to quickly observe how to add and remove items.

Another major goal for this software is effective page-redirect functionality. For example, in the registration page (register.php), the file regscript.php (which processes the registration form) redirects the user to register.php (although in the code it actually appends the page) to display an error messages instead instead of removing the user from the form they just filled out. Simple page-redirect utilizations such as this can ultimately improve the user experience when using this software.

2.
#Overall Description
2.1	
###Product Perspective
shopCart is an original website designed by Jacob Morra. It is a new, self-contained product.

The following diagram showcases the major system scripts, pages, and database tables:

[[https://github.com/username/repository/blob/master/img/octocat.png|alt=octocat]]

2.2	
###Product Functions
The major functions of shopCart are outlined below:

* Item 2
  * Item 2a
  * Item 2b

* User Registration
  * Username and Email authentication 
  * Database Implementation
  * Session implementation
  * Cookies implementation
  * Anti-phishing implementation
    * Captcha
* User Login/Logout
  * Session Implementation
    * Session creation
    * Session destruction
  * Cookies Implementation
* Additional User Features
  * Forgotten password retrieval
  * Change password
* Shopping Cart Functionality
  * Add items to cart
  * Remove items from cart
  * Clear items from cart
  * Checkout
  * Summary of Items
  * Total Cost displayed



