## Образы web-сервера и backend-а
- ./nginx
- ./php-back 

## Деплой
1. Поддерживается только дистрибутив Ubuntu 20.04.
2. Деплой k3s, баланировщика и самих сервисов осуществляется через Ansible. 

### Порядок запуска команд
1. Подготовка Virtualenv  
```
cd ansible
python3 -m venv .venv
pip install -r requirements.txt
```
2. Установка зависимостей для ansible
```
ansible-galaxy collection install -r collections/requirements.yml
```
3. Конфигурирование сервиса
```
vi inventory/inventory.yml
vi inventory/group_vars/k3s_cluster_ha
vi manifests/php-service/deployment.yaml
```
4. Запуск Ansible
```
ansible-playbook -i inventory/inventory.yml playbooks/deploy_php_service.yaml -u vagrant --become-user root
```
