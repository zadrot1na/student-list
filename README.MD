# Student list  - CRUD project with basic lesson about authorization and security

## Prequirements

 * PHP
 * Composer
 * Docker, Docker Compose

## Setup

1. Clone the main project

1. '''git clone '''

2. Go inside project folder and run composer there

'''
cd student-list && composer install
'''

3.a We must also clone the docker repository inside our project

'''
git clone https://github.com/etvsyaka/docker docker
'''

3. At this moment we must build containers from existing docker repository

'''
docker-compose up -d --build
'''

4. Put the data from migrations/* into your local database

5. To stop containers

'''
docker-compose down
'''

## Learning list

* https://habr.com/ru/post/208442/ - About SOLID principles, you must read it and understand and don't make such mistakes
* https://getjump.github.io/ru-php-the-right-way/ - PHP Right way, read it and follow the practices there
