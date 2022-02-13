# Search Tables

## Installing the dependencies
**Install the plugin autoload and dependencies with the composer**
``` 
composer install
```

**Install the node dependencies with the yarn or npm**
``` 
yarn install
npm install
```


### Files and folders ignored
- vendor/
- dist/
- node_modules/

## File Tree
```
.
├── app
│   ├── Controllers
│   │   ├── Actions
│   │   │   └── index.php
│   │   ├── InterfaceController.php
│   │   ├── Menus
│   │   │   ├── Database.php
│   │   │   ├── Search.php
│   │   │   └── Table.php
│   │   ├── Menus.php
│   │   └── RenderHtml.php
│   ├── Helpers
│   │   ├── Config.php
│   │   ├── Functions.php
│   │   ├── Hooks.php
│   │   └── Utils.php
│   ├── index.php
│   ├── Model
│   │   ├── index.php
│   │   ├── Infrastructure
│   │   │   └── Tables.php
│   │   └── Options.php
│   ├── Services
│   │   └── index.php
│   └── Views
│       ├── Admin
│       │   ├── database.php
│       │   ├── table.php
│       │   └── template-parts
│       │       └── header.php
│       └── index.php
├── composer.json
├── LICENSE
├── package.json
├── README.md
├── readme.txt
├── resources
│   ├── admin.js
│   ├── images
│   │   └── index.php
│   ├── scripts
│   │   ├── admin
│   │   │   ├── datables.js
│   │   │   ├── index.js
│   │   │   └── tables.js
│   │   └── theme
│   │       └── index.js
│   ├── styles
│   │   ├── admin
│   │   │   ├── base
│   │   │   │   ├── index.scss
│   │   │   │   └── _vars.scss
│   │   │   ├── components
│   │   │   │   ├── _button.scss
│   │   │   │   ├── _container.scss
│   │   │   │   ├── _fonteawesome.scss
│   │   │   │   ├── index.scss
│   │   │   │   └── _table.scss
│   │   │   └── index.scss
│   │   └── theme
│   │       ├── index.scss
│   │       └── _variaveis.scss
│   └── theme.js
└── search-tables.php

```
