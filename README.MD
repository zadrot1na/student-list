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
* https://svyatoslav.biz/misc/psr_translation/#_PSR-1 - PSR 1
* https://svyatoslav.biz/misc/psr_translation/#_PSR-2 - PSR 2
* https://pastebin.com/p6HHda6r - Пиши правильно!
* https://gist.github.com/codedokode/8759492 - Как форматировать код
* https://www.php-fig.org/psr/psr-12/ - PSR 12 (Extended code style)

Author

Qumo@Qumo
