pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/yourusername/yourrepository.git'
            }
        }
        stage('Deploy') {
            steps {
                sh '''
                cp -r * /var/www/html/
                '''
            }
        }
    }
}
pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/Trohsamuel/WelcomeApps.git', branch: 'main'
            }
        }
        stage('Build') {
            steps {
                echo 'Build step - no action needed for PHP'
            }
        }
        stage('Test') {
            steps {
                echo 'Test step - add any tests here if necessary'
            }
        }
        stage('Deploy') {
            steps {
                sh '''
                sudo cp -r * /var/www/html/
                '''
            }
        }
    }
    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed.'
        }
    }
}
