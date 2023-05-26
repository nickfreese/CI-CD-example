# Example implementation of a Jenkins CI/CD pipeline
 - Uses PHP, PHPUnit, and Composer.
 - the build phase uses docker images and should run on at least a t2.small EC2 instance.


---

The build server is setup with Jenkins and docker.  The deploy stage simply moves the files to a potential web server location.  But in a non example scenario would likely rsync or use an S3 bucket to transfer the full build.

