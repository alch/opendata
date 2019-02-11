# Opendata from SomHackaton19

> This is a [symfony 4/2](https://symfony.com/doc/current/setup.html) project powered by [api-platform 2.3](https://api-platform.com/)

This is a sample project using open data that the [Matarò city hall](http://www.mataro.cat/web/portal/ca/index.html) released for the 2019 edition of the [SomHackaton](https://somhackathon.tecnocampus.cat/)

Data was originally [shared as CSV](https://github.com/somhackathon19/openData).

This project simply imports the CSV into a mysql schema, using vanilla Doctrine ORM and API Platform to expose CRUD API methods for generated entities.

Example in https://opendata-mataro.antaivb.com/api/docs

### Run the project locally using [docker](https://docs.docker.com/) and [compose](https://docs.docker.com/compose/).

> You will need [GNU Make](https://www.gnu.org/software/make/manual/make.html) in order to run the script!

Just do a 

  $ make devtool
  
To bring up a compose stack with the symfony application and the mysql database.

Once the Build is done and compose has created the services, just point uyour browser to http://localhost:8000/api/docs to access the [Swagger](https://docs.docker.com/compose/) documentation.

### Bonus: Docker image build

The default make target creates a `php-fpm` image with the project. You will need to pass the `DOCKER_REGISTRY` as an environment variable to the make script aware of the registry.

By using the `make push` target you will push the image to the registry, provided you have credentials.

Here you have two different methods to authenticate against [Amazon ECR](https://aws.amazon.com/ecr/), with the `make login-role`, or `make loigin-credentials`, depending whether you want to authenticate using [AWS Security Cedentials](https://docs.aws.amazon.com/general/latest/gr/aws-sec-cred-types.html) or the [Role](https://docs.aws.amazon.com/IAM/latest/UserGuide/id_roles.html) of the ec2 instance running the build