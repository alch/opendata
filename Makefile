# Build Makefile

# start common
DOCKER_REGISTRY ?= localhost:5000
NAMESPACE ?=  hackaton
APPLICATION_NAME ?= opendata
PROJECT ?= $(NAMESPACE)/$(APPLICATION_NAME)
IMAGE ?= $(DOCKER_REGISTRY)/$(PROJECT)

TAG ?= $(shell git rev-parse --short HEAD)
TAGGED_IMAGE_NAME ?= $(IMAGE):$(TAG)
LATEST_IMAGE_NAME ?= $(IMAGE):latest
DEVTOOL_API_PORT ?= 8000

# end common

COMPOSE_DEVTOOL_ENVIRONMENT=NAMESPACE=$(NAMESPACE) APPLICATION_NAME=$(APPLICATION_NAME) DEVTOOL_API_PORT=$(DEVTOOL_API_PORT)
COMPOSE_DEVTOOL=docker-compose -f docker/devtool/docker-compose.yml

build:
	docker build . \
		-t $(TAGGED_IMAGE_NAME) \
		--build-arg NAMESPACE=$(NAMESPACE) \
		--build-arg APPLICATION_NAME=$(APPLICATION_NAME)

push: login-role push-tag

devtool:
	$(COMPOSE_DEVTOOL_ENVIRONMENT) $(COMPOSE_DEVTOOL) rm -f
	$(COMPOSE_DEVTOOL_ENVIRONMENT) $(COMPOSE_DEVTOOL) up -d

devtool-stop:
	$(COMPOSE_DEVTOOL_ENVIRONMENT) $(COMPOSE_DEVTOOL) stop

login-credentials:
	$(shell [ ! -z "$(AWS_ACCESS_KEY_ID)" -a ! -z "$(AWS_SECRET_ACCESS_KEY)" ] \
		&& docker run --rm -i \
		--env AWS_ACCESS_KEY_ID=$(AWS_ACCESS_KEY_ID) \
		--env AWS_SECRET_ACCESS_KEY=$(AWS_SECRET_ACCESS_KEY) \
		--env AWS_DEFAULT_REGION=eu-west-1 \
		mikesir87/aws-cli \
		aws ecr get-login --no-include-email)

login-role:
	$(shell [ "$(DOCKER_REGISTRY)" != "localhost:5000" ] \
		&& docker run --rm -i \
		--env AWS_DEFAULT_REGION=eu-west-1 \
		mikesir87/aws-cli \
		aws ecr get-login --no-include-email)

push-tag:
	docker tag $(TAGGED_IMAGE_NAME) $(LATEST_IMAGE_NAME)
	docker push $(TAGGED_IMAGE_NAME)
	docker push $(LATEST_IMAGE_NAME)

.PHONY: clean build push push-tag login login-role login-credentials devtool devtool-stop
