/* Requires the Docker Pipeline plugin */
pipeline {
	agent any
    stages {
        stage('build') {
        	agent { dockerfile true }
            steps {
                sh 'php --version'
                sh 'php -v'
                // echo 'Installing project composer dependencies...'
                sh 'cd ${WORKSPACE} && composer install --no-progress'
            }
        }
        stage('Testing') {
            agent { dockerfile true }
            steps {
               echo 'Running PHP 8.1 tests inside the container...'
               
               echo 'Running PHPUnit tests...'
               sh 'cd ${WORKSPACE} && composer install --no-progress && ./vendor/bin/phpunit tests --log-junit ${WORKSPACE}/report/junit.xml'
               junit 'report/*.xml'
            }

        }
        stage('Deploy') {
            agent any
            steps {
               echo 'Deploying App'
               
               sh 'rm -rf /var/www/html/*'
               sh 'cp -r ${WORKSPACE}/* /var/www/html/'
               echo 'Deploy Complete!'
            }

        }
    }
}