#!/bin/bash

# Comando para adicionar todos os arquivos modificados ao commit
git add .

# Mensagem de commit
commit_message="Atualização automática - $(date +'%Y-%m-%d %H:%M:%S')"

# Comando para realizar o commit com a mensagem especificada
git commit -m "$commit_message"

# Comando para realizar o push das alterações para o repositório remoto
git push
