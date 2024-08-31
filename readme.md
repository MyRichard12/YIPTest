## A lightweight user Registration project <small>built using Smarty</small>


Installation requirements
- Linux Ubuntu OS with php and composer installed

### Implementation Choices
This lightweight app was built in a modular manner that was inspired by Laravel's infrastructure...

- **index.php** loads into
- **app/bootstrap** where the app compiles the smarty plugin for resusable purposes
- **templates** and **templates_c** are default smarty folders that houses the **templates/form.tpl** and **templates/confirmation.tpl** as instructed by the project guide **templates/styles/*** houses the styesheet. <br> See [Smarty documentation](https://www.smarty.net/documentation) for more info on templating

- **app/models** houses the model classes.


### Challenges 🥵
_Honestly smarty feels kind of old and i had a major challenge installing an env-compatible package to globalize some variables_

### Installation steps
```
composer install

./start.sh

```

The server starts on port 5051