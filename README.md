# API ASSIGNMENT SAMPLE



### Development setup guide

Following the following guide.

- Clone the project from the repository.
  ```bash
      git clone git@github.com:biikashsubedi/api-assignment-sample.git
  ```

- Install the composer in the project directory.
  ```bash
      composer install
  ``` 

- Make the .env file by copying the .env.example file.
  ```bash
      cp .env.example .env
  ```

- Generate the unique application key in .env.
  ```bash
      php artisan key:generate
  ```

- Install npm or yarn dependency manager.Note: yarn prefered
  ```bash
      npm install OR yarn install 
  ```


- To compile all the CSS and JS file execute the command.
  ```bash
      npm run dev OR yarn run dev
  ``` 
