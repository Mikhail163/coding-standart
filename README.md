# coding-standard

## Installation
1. Install the module via composer:
    ```console
        composer require --dev mikhail163/coding-standard
    ```
2. Add composer scripts into your `composer.json`:
   ```json
        "scripts": {
            "cs-check": "phpcs",
            "cs-fix": "phpcbf"
        }
    ```
3. Create file `phpcs.xml`:
    ```xml
        <?xml version="1.0"?>
            <ruleset name="Mikhail163 Team Coding Standard">
            <rule ref="./vendor/mikhail163/coding-standard/ruleset.xml"/>
            <file>bin</file>
            <file>config</file>
            <file>lib</file>
            <file>src</file>
            <file>test</file>
            <exclude-pattern>*\.(inc|css|js)</exclude-pattern>
        </ruleset>
    ```
## Usage
Run: `composer cs-check` OR `composer cs-fix`