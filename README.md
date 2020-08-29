# coding-standard

## Installation
1. Install the module via composer:
    ```console
        composer require --dev egpb/coding-standard
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
            <ruleset name="ETP GPB Team Coding Standard">
            <rule ref="./vendor/egpb/coding-standard/ruleset.xml"/>
            <file>bin</file>
            <file>config</file>
            <file>lib</file>
            <file>src</file>
            <file>test</file>
        </ruleset>
    ```
## Usage
Run: `composer cs-check` OR `composer cs-fix`