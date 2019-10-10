# Snow for Editor js

## Installation 
To install lib use composer:
```
   composer require miaababikir/snow 
```

## Guide 

Add this line at the top of your PHP script

```php
    use Miaababikir\Snow\Parser;
```

## Basic usage

You can parse editor js json by passing the json object and you will get the content in plain HTML.

#### For example
The json from editor js will look like this:
```json
    {
      "time": 1570726916129,
      "blocks": [
        {
          "type": "header",
          "data": {
            "text": "Editor.js",
            "level": 2
          }
        },
        {
          "type": "list",
          "data": {
            "style": "unordered",
            "items": [
              "It is a block-styled editor",
              "It returns clean data output in JSON",
              "Designed to be extendable and pluggable with a simple API"
            ]
          }
        },
        {
          "type": "paragraph",
          "data": {
            "text": "We have been working."
          }
        }
      ],
      "version": "2.15.0"
    }
```

You will pass the json above to the parser
```php
    Parser::parse($editorJson);
```

Then the output will be something like this

```php
    "<h2>Editor.js</h2><ul><li>It is a block-styled editor</li><li>It returns clean data output in JSON</li><li>Designed to be extendable and pluggable with a simple API</li></ul><p>We have been working.</p>"
```