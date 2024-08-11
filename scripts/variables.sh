LOCAL_USER=$(whoami)
DOCKER_GROUP=$(getent group docker | cut -d: -f1)

source ./variables.sh