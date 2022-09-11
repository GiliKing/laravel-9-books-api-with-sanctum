# Laravel 9 BOOK LISTING API

This a backend only application that returns json data of book listings
containing the name of book their authors and the total amount of comment
associated with the book

## EndPionts 

### Public Endpoints

# Register Endpoints

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


Response json data

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


# Login Endpoints

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

Response json data
 
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

### Public Endpoints
##  Books Endpoints 
#  all Book listings from old new to

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

Response json data
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

#  all latest Books

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


Response json data
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


#  all oldest Books

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

Response json data
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



### Protected Endpoints
# Logout Endpoints

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


### Protected Endpoints
## Book listing Enpoints for Authenticated User
#  Books Endpoints

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

Response json data
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




## Usage

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