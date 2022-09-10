build:
	docker-compose run --rm composer composer install
	docker-compose run --rm php php build.php

publish:
	docker build . -t kipelovets/homepage:latest
	docker push kipelovets/homepage:latest

deploy:
	kubectl apply -f k8s/deployment.yaml
	kubectl rollout restart deployment/homepage