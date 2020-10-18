docker rm -f $(docker ps -q)
docker rmi -f $(docker images -q)

kubectl delete deploy php-deployment
kubectl delete deploy nginx-deployment
kubectl delete deploy mysql-deployment
kubectl delete deploy ftps-deployment
kubectl delete deploy wordpress-deployment
kubectl delete service php-service
kubectl delete service nginx-service
kubectl delete service mysql-service
kubectl delete service ftps-service
kubectl delete service wordpress-service
kubectl delete persistentvolumeclaim mysql-data-disk
kubectl delete persistentvolumeclaim ftps-data-disk
kubectl delete persistentvolume mysql-data
kubectl delete persistentvolume ftps-data
kubectl delete secrets mysql-secrets