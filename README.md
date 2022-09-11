# Laravel 9 BOOK LISTING API

This a backend only application that returns json data of book listings
containing the name of book their authors and the total amount of comment
associated with the book

## EndPionts 

### Public Endpoints

# Register Endpoints


<p style="color: yellow;">The Method is POST</p>

https://larabooksok.herokuapp.com/api/register

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>


You must provide the Body Parameter
<ol>
    <li>
        name : Your full name
    </li>
    <li>
        email : Your email address
    </li>
    <li>
        password : Your password
    </li>
    <li>
        password_confirmation : Your password again
    </li>
</ol>


Response json data <br>

{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "id": id,
            "name": "Your name",
            "email": "Your",
            "email_verified_at": null,
            "created_at": "2022-09-11T01:51:31.000000Z",
            "updated_at": "2022-09-11T01:51:31.000000Z"
        },
        "token": "token generated"
    }
}

<br>

### Public Endpoints

# Login Endpoints


<p style="color: yellow;">The Method is POST</p>

https://larabooksok.herokuapp.com/api/lgoin

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>


You must provide the Body Parameter
<ol>
    <li>
        email : Your email address
    </li>
    <li>
        password : Your password
    </li>
</ol>

Response json data <br>
 
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "id": id,
            "name": "Your name",
            "email": "Your",
            "email_verified_at": null,
            "created_at": "2022-09-11T01:51:31.000000Z",
            "updated_at": "2022-09-11T01:51:31.000000Z"
        },
        "token": "this is your authorization bearer token"
    }
}

### Public Endpoints
##  Books Endpoints 
#  all Book listings from old to New


<p style="color: yellow;">The Method is GET</p>

https://larabooksok.herokuapp.com/api/books/all

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

Response json data <br>
{
    "id": "294",
    "attributes": {
        "book_title": "Product Specialist",
        "author": "Miss Madisyn Keeling",
        "publication_year": "2010",
        "uploaded_at": "2022-09-11T10:03:53.000000Z",
        "updated_at": "2022-09-11T10:03:53.000000Z"
    },
    "relationships": {
        "comment_count": 16
    }
}

<br>

### Public Endpoints
##  Books Endpoints 
#  all latest Books


<p style="color: yellow;">The Method is GET</p>

https://larabooksok.herokuapp.com/api/books/latest

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>


Response json data <br>
{
    "id": "154",
    "attributes": {
        "book_title": "Nuclear Technician",
        "author": "Kimberly Howe",
        "publication_year": "2022",
        "uploaded_at": "2022-09-11T10:03:41.000000Z",
        "updated_at": "2022-09-11T10:03:41.000000Z"
    },
    "relationships": {
        "comment_count": 8
    }
}

<br>

### Public Endpoints
##  Books Endpoints 
#  all oldest Books


<p style="color: yellow;">The Method is Get</p>

https://larabooksok.herokuapp.com/api/books/oldest

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

Response json data <br>
{
    "id": "174",
    "attributes": {
        "book_title": "Clerk",
        "author": "Ernestine Wyman",
        "publication_year": "1972",
        "uploaded_at": "2022-09-11T10:03:43.000000Z",
        "updated_at": "2022-09-11T10:03:43.000000Z"
    },
    "relationships": {
        "comment_count": 9
    }
}

<br>

### Protected Endpoints
# Logout Endpoints

<p style="color: yellow;">The Method is POST</p>

https://larabooksok.herokuapp.com/api/logout

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

Response json data
Note : Youe Authorization bearer token will no longer be valid;
<br>
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "message": "You have successfully been logged out and your token has been deleted"
    }
}

<br>

### Protected Endpoints
## Book listing Enpoints for Authenticated User
#  Get All Books Endpoints

<p style="color: yellow;">The Method is Get</p>

https://larabooksok.herokuapp.com/api/books

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

Response json data <br>
{
    "id": "2194",
    "attributes": {
        "book_title": "Transportation Worker",
        "author": "Brayan Ryan",
        "publication_year": "1991",
        "created_at": "2022-09-11T10:03:46.000000Z",
        "updated_at": "2022-09-11T10:03:46.000000Z"
    },
    "relationships": {
        "user": "Code with gili",
        "email": "chrisogili12@gmail.com",
        "ipadd": "15203821077",
        "comment": "Alice thought), and it was not here before,' said Alice,) and round Alice, every now and then, 'we went to school every day--' 'I'VE been to her, 'if we had the door of which was full of the Queen's ears--' the Rabbit angrily. 'Here! Come and help me out of a dance is it?' he said, turning to Alice to herself, 'Why, they're only a mouse that had fluttered down from the sky! Ugh, Serpent!' 'But I'm NOT a serpent, I tell you!' But she waited for some time without hearing anything more: at last."
    }
}

<br>

### Protected Endpoints
## Comment listing Enpoints for Authenticated User
#  Get All Comment Endpoints

<p style="color: yellow;">The Method is Get</p>

https://larabooksok.herokuapp.com/api/comments

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

Response json data
Note: Comment character length are restricted to 500 character

{
"id": "204",
"attributes": {
    "user": "Code with gili",
    "email": "chrisogili12@gmail.com",
    "ipadd": "1-319-760-3147",
    "comment": "I'm better now--but I'm a deal too flustered to tell its age, there was generally a ridge or furrow in the last few minutes, and she had known them all her riper years, the simple rules their friends had taught them: such as, 'Sure, I don't know,' he went on all the party were placed along the sea-shore--' 'Two lines!' cried the Gryphon, and the beak-- Pray how did you manage to do it! Oh dear! I wish you were down here till I'm somebody else\"--but, oh dear!' cried Alice, quite forgetting in.",
    "commented_at": "2022-09-11T10:11:09.000000Z",
    "updated_at": "2022-09-11T10:11:09.000000Z"
},
"relationships": {
    "book_id": 24,
    "title": "Architect",
    "author": "Prof. Morris Kshlerin DVM",
    "publication_year": "1987"
}
}



### Protected Endpoints
## Comment listing Enpoints for Authenticated User
#  Create A Single Comment Endpoints

<p style="color: yellow;">The Method is POST</p>

https://larabooksok.herokuapp.com/api/comments

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>


You must provide your import parameters
<ol>
    <li>
        book_id : The book id you want to comment on
    </li>
    <li>
        comment: Your Comment about the book no more than 500 characters
    </li>
</ol>

Response json data
Note: Comment character length are restricted to 500 character

{
"id": "204",
"attributes": {
    "user": "Code with gili",
    "email": "chrisogili12@gmail.com",
    "ipadd": "1-319-760-3147",
    "comment": "I'm better now--but I'm a deal too flustered to tell its age, there was generally a ridge or furrow in the last few minutes, and she had known them all her riper years, the simple rules their friends had taught them: such as, 'Sure, I don't know,' he went on all the party were placed along the sea-shore--' 'Two lines!' cried the Gryphon, and the beak-- Pray how did you manage to do it! Oh dear! I wish you were down here till I'm somebody else\"--but, oh dear!' cried Alice, quite forgetting in.",
    "commented_at": "2022-09-11T10:11:09.000000Z",
    "updated_at": "2022-09-11T10:11:09.000000Z"
},
"relationships": {
    "book_id": 24,
    "title": "Architect",
    "author": "Prof. Morris Kshlerin DVM",
    "publication_year": "1987"
}
}

### Protected Endpoints
## Comment listing Enpoints for Authenticated User
#  Show A Single Comment Endpoints

<p style="color: yellow;">The Method is Get</p>

https://larabooksok.herokuapp.com/api/comments/{id}

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

You must provide the comment {id} parameter that you to view

Response json data
Note: It returns the single comment you request for

<br>


### Protected Endpoints
## Comment listing Enpoints for Authenticated User
#  Update A Single Comment Endpoints

<p style="color: yellow;">The Method is Patch</p>

https://larabooksok.herokuapp.com/api/comments/{id}

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

Your Must provide the comment id parameter that you want to update {id}

You must provide the input content
<ol>
    <li>
       comment: No more than 5000 characters 
    </li>
</ol>

Response json data
Note: If successfull your response will be the update comment


<br>


### Protected Endpoints
## Comment listing Enpoints for Authenticated User
#   Delete A Single Comment Endpoints

<p style="color: yellow;">The Method is Delete</p>

https://larabooksok.herokuapp.com/api/comments/{id}

You must set the Request Headers
<ol>
    <li>
        Accept: application/vnd.api+json
    </li>
    <li>
        Content-Type: application/vnd.api+json
    </li>
</ol>

You must Provide you Authoriton Bearer Token
<ol>
    <li>
        Bearer Token : you authorizes token
    </li>
</ol>

Your Must provide the comment id parameter that you want to delete {id}

Response json data
Note: An empty response with be return with a 
status Code of 204 and
status text of No Record found 
this means the comment has being deleted



## IMPORTANT INFORMATION

All Successfull HTTP Response Comes with
<ol>
    <li>
        Status
    </li>
    <li>
        Message
    </li>
    <li>
        Data
    </li>
</ol>

<br>
 json([
    "status" => "Request was succesful.",
    "message" => $message,
    "data" => $data
], $code);

<br>

All Non Successfull HTTP Response Comes with an Error that has
<ol>
    <li>
        Status
    </li>
    <li>
        Message
    </li>
    <li>
        Data
    </li>
</ol>

<br>
json([
    "status" => "Error has occurred...",
    "message" => $message,
    "data" => $data
], $code)


## Usage

### THE APPLICATION IS RUNNING LIVE
these repo is connected to a live database that has all the resquest information
but if you prefer to setup you own application on you local machine
please follow the imformation below thanks

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```

## License

The LaraGigs app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).