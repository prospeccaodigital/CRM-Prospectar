<?php

return [
    'acl' => [
        'leads'           => 'Oportunidades',
        'lead'            => 'Oportunidade',
        'quotes'          => 'Cotações',
        'mail'            => 'E-mail',
        'inbox'           => 'Caixa de Entrada',
        'draft'           => 'Rascunho',
        'outbox'          => 'Caixa de Saída',
        'sent'            => 'Enviados',
        'trash'           => 'Lixeira',
        'activities'      => 'Atividades',
        'webhook'         => 'Webhook',
        'contacts'        => 'Contatos',
        'persons'         => 'Pessoas',
        'organizations'   => 'Empresas',
        'products'        => 'Produtos',
        'settings'        => 'Configurações',
        'groups'          => 'Grupos',
        'roles'           => 'Funções',
        'users'           => 'Usuários',
        'user'            => 'Usuário',
        'automation'      => 'Automação',
        'attributes'      => 'Atributos',
        'pipelines'       => 'Funil',
        'sources'         => 'Origem',
        'types'           => 'Tipos',
        'email-templates' => 'Modelos de E-mail',
        'workflows'       => 'Fluxos de Trabalho',
        'other-settings'  => 'Outras Configurações',
        'tags'            => 'Tags',
        'configuration'   => 'Configuração',
        'create'          => 'Adicionar',
        'edit'            => 'Editar',
        'view'            => 'Visualizar',
        'print'           => 'Imprimir',
        'delete'          => 'Excluir',
        'export'          => 'Exportar',
        'mass-delete'     => 'Exclusão em Massa',
    ],

    'users' => [
        'activate-warning' => 'Sua conta ainda não foi ativada. Por favor, entre em contato com o administrador.',
        'login-error'      => 'As credenciais não correspondem aos nossos registros.',

        'login' => [
            'email'                => 'Endereço de E-mail',
            'forget-password-link' => 'Esqueceu a Senha?',
            'password'             => 'Senha',
            'submit-btn'           => 'Acessar',
            'title'                => 'Acessar',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'E-mail Registrado',
                'email-not-exist' => 'E-mail Não Existe',
                'page-title'      => 'Esqueceu a Senha',
                'reset-link-sent' => 'Link para redefinir a senha foi enviado',
                'sign-in-link'    => 'Voltar para tela de acesso?',
                'submit-btn'      => 'Redefinir',
                'title'           => 'Recuperar Senha',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'Voltar para tela de acesso?',
            'confirm-password' => 'Confirmar Senha',
            'email'            => 'E-mail Registrado',
            'password'         => 'Senha',
            'submit-btn'       => 'Redefinir Senha',
            'title'            => 'Redefinir Senha',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Voltar',
            'change-password'   => 'Alterar Senha',
            'confirm-password'  => 'Confirmar Senha',
            'current-password'  => 'Senha Atual',
            'email'             => 'E-mail',
            'general'           => 'Geral',
            'invalid-password'  => 'A senha atual que você digitou está incorreta.',
            'name'              => 'Nome',
            'password'          => 'Senha',
            'profile-image'     => 'Imagem de Perfil',
            'save-btn'          => 'Salvar Conta',
            'title'             => 'Minha Conta',
            'update-success'    => 'Conta atualizada com sucesso',
            'upload-image-info' => 'Carregue uma imagem de perfil (110px X 110px) no formato PNG ou JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'E-mail',
                    'title'        => 'Escrever e-mail',
                    'to'           => 'Para',
                    'enter-emails' => 'Pressione Enter para adicionar e-mails',
                    'cc'           => 'Cópia',
                    'bcc'          => 'Cópia oculta',
                    'subject'      => 'Assunto',
                    'send-btn'     => 'Enviar',
                    'message'      => 'Mensagem',
                ],

                'file' => [
                    'btn'           => 'Arquivo',
                    'title'         => 'Adicionar Arquivo',
                    'title-control' => 'Título',
                    'name'          => 'Nome',
                    'description'   => 'Descrição',
                    'file'          => 'Arquivo',
                    'save-btn'      => 'Salvar Arquivo',
                ],

                'note' => [
                    'btn'      => 'Nota',
                    'title'    => 'Adicionar Nota',
                    'comment'  => 'Comentário',
                    'save-btn' => 'Salvar Nota',
                ],

                'activity' => [
                    'btn'           => 'Atividade',
                    'title'         => 'Adicionar Atividade',
                    'title-control' => 'Título',
                    'description'   => 'Descrição',
                    'schedule-from' => 'Agendar De',
                    'schedule-to'   => 'Agendar Até',
                    'location'      => 'Localização',
                    'call'          => 'Chamada',
                    'meeting'       => 'Reunião',
                    'lunch'         => 'Almoço',
                    'save-btn'      => 'Salvar Atividade',

                    'participants' => [
                        'title'       => 'Participantes',
                        'placeholder' => 'Digite para pesquisar participantes',
                        'users'       => 'Usuários',
                        'persons'     => 'Pessoas',
                        'no-results'  => 'Nenhum resultado encontrado...',
                    ],
                ],
            ],

            'index' => [
                'all'          => 'Todos',
                'bcc'          => 'Cópia oculta',
                'by-user'      => 'Por usuário',
                'calls'        => 'Chamadas',
                'cc'           => 'Cópia',
                'change-log'   => 'Logs de Alterações',
                'delete'       => 'Excluir',
                'edit'         => 'Editar',
                'emails'       => 'E-mails',
                'empty'        => 'Vazio',
                'files'        => 'Arquivos',
                'from'         => 'De',
                'location'     => 'Localização',
                'lunches'      => 'Almoços',
                'mark-as-done' => 'Marcar como Concluído',
                'meetings'     => 'Reuniões',
                'notes'        => 'Notas',
                'participants' => 'Participantes',
                'planned'      => 'Planejado',
                'quotes'       => 'Cotações',
                'scheduled-on' => 'Agendado em',
                'system'       => 'Sistema',
                'to'           => 'Para',
                'unlink'       => 'Desvincular',
                'view'         => 'Visualizar',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Nenhuma Atividade foi encontrada',
                        'description' => 'Nenhuma atividade foi encontrada para isso. Você pode adicionar atividades clicando no botão no painel à esquerda.',
                    ],

                    'planned' => [
                        'title'       => 'Nenhuma Atividade Planejada foi encontrada',
                        'description' => 'Nenhuma atividade planejada foi encontrada para isso. Você pode adicionar atividades planejadas clicando no botão no painel à esquerda.',
                    ],

                    'notes' => [
                        'title'       => 'Nenhuma Nota foi encontrada',
                        'description' => 'Nenhuma nota encontrada para isso. Você pode adicionar notas clicando no botão no painel à esquerda.',
                    ],

                    'calls' => [
                        'title'       => 'Nenhuma Chamada foi encontrada',
                        'description' => 'Nenhuma chamada foi encontrada para isso. Você pode adicionar chamadas clicando no botão no painel à esquerda.',
                    ],

                    'meetings' => [
                        'title'       => 'Nenhuma Reunião foi encontrada',
                        'description' => 'Nenhuma reunião foi encontrada para isso. Você pode adicionar reuniões clicando no botão no painel à esquerda.',
                    ],

                    'lunches' => [
                        'title'       => 'Nenhum Almoço foi encontrado',
                        'description' => 'Nenhum almoço foi encontrado para isso. Você pode adicionar almoços clicando no botão no painel à esquerda.',
                    ],

                    'files' => [
                        'title'       => 'Nenhum Arquivo foi encontrado',
                        'description' => 'Nenhum arquivo foi encontrado para isso. Você pode adicionar arquivos clicando no botão no painel à esquerda.',
                    ],

                    'emails' => [
                        'title'       => 'Nenhum E-mail foi encontrado',
                        'description' => 'Nenhum e-mail foi encontrado para isso. Você pode adicionar e-mails clicando no botão no painel à esquerda.',
                    ],

                    'system' => [
                        'title'       => 'Nenhum Log de Alteração foi encontrado',
                        'description' => 'Nenhum log de alteração foi encontrado para isso.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Adicionar Imagem',
                'ai-add-image-btn'  => 'Mágica AI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Apenas arquivos de imagem (.jpeg, .jpg, .png, ..) são permitidos.',

                'placeholders' => [
                    'front'     => 'Frente',
                    'next'      => 'Próximo',
                    'size'      => 'Tamanho',
                    'use-cases' => 'Casos de Uso',
                    'zoom'      => 'Zoom',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Adicionar Vídeo',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Apenas arquivos de vídeo (.mp4, .mov, .ogg ..) são permitidos.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Nenhum registro foi selecionado.',
                'must-select-a-mass-action-option' => 'Você deve selecionar uma opção de ação em massa.',
                'must-select-a-mass-action'        => 'Você deve selecionar uma ação em massa.',
            ],

            'toolbar' => [
                'length-of' => 'tamanho de',
                'of'        => 'de',
                'per-page'  => 'Por Página',
                'results'   => 'Resultados',
                'delete'    => 'Excluir',
                'selected'  => 'Itens Selecionados',

                'mass-actions' => [
                    'submit'        => 'Enviar',
                    'select-option' => 'Selecionar Opção',
                    'select-action' => 'Selecionar Ação',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Aplicar Filtros',
                    'back-btn'          => 'Voltar',
                    'create-new-filter' => 'Adicionar novo Filtro',
                    'custom-filters'    => 'Filtros Personalizados',
                    'delete-error'      => 'Algo deu errado ao excluir o filtro, por favor tente novamente.',
                    'delete-success'    => 'Filtro excluído com sucesso.',
                    'empty-description' => 'Não há filtros selecionados disponíveis para salvar. Por favor, selecione filtros para salvar.',
                    'empty-title'       => 'Adicionar Filtros para Salvar',
                    'name'              => 'Nome',
                    'quick-filters'     => 'Filtros Rápidos',
                    'save-btn'          => 'Salvar',
                    'save-filter'       => 'Salvar Filtro',
                    'saved-success'     => 'Filtro salvo com sucesso.',
                    'selected-filters'  => 'Filtros Selecionados',
                    'title'             => 'Filtro',
                    'update'            => 'Atualizar',
                    'update-filter'     => 'Atualizar Filtro',
                    'updated-success'   => 'Filtro atualizado com sucesso.',
                ],

                'search' => [
                    'title' => 'Pesquisar',
                ],
            ],

            'filters' => [
                'select' => 'Selecionar',
                'title'  => 'Filtros',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Digite pelo menos 2 caracteres...',
                        'no-results'         => 'Nenhum resultado encontrado...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Limpar Todos',
                    'title'     => 'Filtros Personalizados',
                ],

                'boolean-options' => [
                    'false' => 'Falso',
                    'true'  => 'Verdadeiro',
                ],

                'date-options' => [
                    'last-month'        => 'Último Mês',
                    'last-six-months'   => 'Últimos 6 Meses',
                    'last-three-months' => 'Últimos 3 Meses',
                    'this-month'        => 'Este Mês',
                    'this-week'         => 'Esta Semana',
                    'this-year'         => 'Este Ano',
                    'today'             => 'Hoje',
                    'yesterday'         => 'Ontem',
                ],
            ],

            'table' => [
                'actions'              => 'Ações',
                'no-records-available' => 'Nenhum Registro Disponível.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Concordar',
                'disagree-btn' => 'Discordar',
                'message'      => 'Você tem certeza de que deseja realizar esta ação?',
                'title'        => 'Você tem certeza?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Tags',
                'added-tags'     => 'Tags Adicionadas',
                'save-btn'       => 'Salvar Tag',
                'placeholder'    => 'Digite para procurar tags',
                'add-tag'        => 'Adicionar Tag',
                'aquarelle-red'  => 'Vermelho',
                'crushed-cashew' => 'Castanho',
                'beeswax'        => 'Amarelado',
                'lemon-chiffon'  => 'Limão',
                'snow-flurry'    => 'Neve',
                'honeydew'       => 'Melão',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => 'Desenvolvido por :krayin, um projeto de código aberto da :webkul.',
            ],

            'header' => [
                'mega-search' => [
                    'title'   => 'Busca rápida',

                    'tabs' => [
                        'leads'    => 'Oportunidades',
                        'quotes'   => 'Cotações',
                        'persons'  => 'Pessoas',
                        'products' => 'Produtos',
                    ],

                    'explore-all-products'          => 'Explorar todos os Produtos',
                    'explore-all-leads'             => 'Explorar todos as Oportunidades',
                    'explore-all-contacts'          => 'Explorar todos os Contatos',
                    'explore-all-quotes'            => 'Explorar todas as Cotações',
                    'explore-all-matching-products' => 'Explorar todos os produtos correspondentes a ":query" (:count)',
                    'explore-all-matching-leads'    => 'Explorar todos os negócios correspondentes a ":query" (:count)',
                    'explore-all-matching-contacts' => 'Explorar todos os contatos correspondentes a ":query" (:count)',
                    'explore-all-matching-quotes'   => 'Explorar todas as cotações correspondentes a ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'Excluir',
            ],

            'lookup' => [
                'click-to-add'    => 'Clique para adicionar',
                'search'          => 'Pesquisar',
                'no-result-found' => 'Nenhum resultado encontrado',
                'search'          => 'Pesquisar...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Clique para Adicionar',
            'no-results'   => 'Nenhum Resultado Encontrado',
            'add-as-new'   => 'Adicionar como Novo',
            'search'       => 'Pesquisar...',
        ],

        'flash-group' => [
            'success' => 'Sucesso',
            'error'   => 'Erro',
            'warning' => 'Aviso',
            'info'    => 'Informação',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Cotações',
            'create-btn'     => 'Adicionar Cotação',
            'create-success' => 'Cotação adicionada com sucesso.',
            'update-success' => 'Cotação atualizada com sucesso.',
            'delete-success' => 'Cotação excluída com sucesso.',
            'delete-failed'  => 'Não é possível excluir a cotação.',

            'datagrid' => [
                'subject'        => 'Assunto',
                'sales-person'   => 'Vendedor',
                'expired-at'     => 'Expirado em',
                'created-at'     => 'Criado em',
                'expired-quotes' => 'Cotação Expirada',
                'person'         => 'Pessoa',
                'subtotal'       => 'Subtotal',
                'discount'       => 'Desconto',
                'tax'            => 'Imposto',
                'adjustment'     => 'Ajuste',
                'grand-total'    => 'Total Geral',
                'edit'           => 'Editar',
                'delete'         => 'Excluir',
                'print'          => 'Imprimir',
            ],

            'pdf' => [
                'adjustment'       => 'Ajuste',
                'amount'           => 'Valor',
                'billing-address'  => 'Endereço de Cobrança',
                'date'             => 'Data',
                'discount'         => 'Desconto',
                'expired-at'       => 'Expirado em',
                'grand-total'      => 'Total Geral',
                'person'           => 'Pessoa',
                'price'            => 'Preço',
                'product-name'     => 'Nome do Produto',
                'quantity'         => 'Quantidade',
                'quote-id'         => 'ID da Cotação',
                'sales-person'     => 'Vendedor',
                'shipping-address' => 'Endereço de Envio',
                'sku'              => 'Código',
                'sub-total'        => 'Subtotal',
                'subject'          => 'Assunto',
                'tax'              => 'Imposto',
                'title'            => 'Cotação',
            ],
        ],

        'create' => [
            'title'             => 'Adicionar Cotação',
            'save-btn'          => 'Salvar Cotação',
            'quote-info'        => 'Informações da Cotação',
            'quote-info-info'   => 'Informe as informações básicas da cotação.',
            'address-info'      => 'Informações de Endereço',
            'address-info-info' => 'Informações sobre o endereço relacionado à cotação.',
            'quote-items'       => 'Itens da Cotação',
            'search-products'   => 'Pesquisar Produtos',
            'link-to-lead'      => 'Vincular a um negócio',
            'quote-item-info'   => 'Adicionar solicitação de produto para esta cotação.',
            'quote-name'        => 'Nome da Cotação',
            'quantity'          => 'Quantidade',
            'price'             => 'Preço',
            'discount'          => 'Desconto',
            'tax'               => 'Imposto',
            'total'             => 'Total',
            'amount'            => 'Valor',
            'add-item'          => '+ Adicionar Item',
            'sub-total'         => 'Subtotal (:symbol)',
            'total-discount'    => 'Desconto (:symbol)',
            'total-tax'         => 'Imposto (:symbol)',
            'total-adjustment'  => 'Ajuste (:symbol)',
            'grand-total'       => 'Total Geral (:symbol)',
            'discount-amount'   => 'Valor do Desconto',
            'tax-amount'        => 'Valor do Imposto',
            'adjustment-amount' => 'Valor do Ajuste',
            'product-name'      => 'Nome do Produto',
            'action'            => 'Ação',
        ],

        'edit' => [
            'title'             => 'Editar Cotação',
            'save-btn'          => 'Salvar Cotação',
            'quote-info'        => 'Informações da Cotação',
            'quote-info-info'   => 'Informe as informações básicas da cotação.',
            'address-info'      => 'Informações de Endereço',
            'address-info-info' => 'Informações sobre o endereço relacionado à cotação.',
            'quote-items'       => 'Itens da Cotação',
            'link-to-lead'      => 'Vincular a um negócio',
            'quote-item-info'   => 'Adicionar solicitação de produto para esta cotação.',
            'quote-name'        => 'Nome da Cotação',
            'quantity'          => 'Quantidade',
            'price'             => 'Preço',
            'search-products'   => 'Pesquisar Produtos',
            'discount'          => 'Desconto',
            'tax'               => 'Imposto',
            'total'             => 'Total',
            'amount'            => 'Valor',
            'add-item'          => '+ Adicionar Item',
            'sub-total'         => 'Subtotal (:symbol)',
            'total-discount'    => 'Desconto (:symbol)',
            'total-tax'         => 'Imposto (:symbol)',
            'total-adjustment'  => 'Ajuste (:symbol)',
            'grand-total'       => 'Total Geral (:symbol)',
            'discount-amount'   => 'Valor do Desconto',
            'tax-amount'        => 'Valor do Imposto',
            'adjustment-amount' => 'Valor do Ajuste',
            'product-name'      => 'Nome do Produto',
            'action'            => 'Ação',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Pessoas',
                'create-btn'     => 'Adicionar Pessoa',
                'create-success' => 'Pessoa adicionada com sucesso.',
                'update-success' => 'Pessoa atualizada com sucesso.',
                'delete-success' => 'Pessoa excluída com sucesso.',
                'delete-failed'  => 'Não foi possível excluir a pessoa.',

                'datagrid' => [
                    'contact-numbers'   => 'Números de Contato',
                    'delete'            => 'Excluir',
                    'edit'              => 'Editar',
                    'emails'            => 'E-mails',
                    'id'                => 'ID',
                    'view'              => 'Visualizar',
                    'name'              => 'Nome',
                    'organization-name' => 'Nome da Empresa',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'Sobre a Pessoa',
                'about-organization' => 'Sobre a Empresa',

                'activities' => [
                    'index' => [
                        'all'          => 'Todos',
                        'calls'        => 'Chamadas',
                        'meetings'     => 'Reuniões',
                        'lunches'      => 'Almoços',
                        'files'        => 'Arquivos',
                        'quotes'       => 'Cotações',
                        'notes'        => 'Notas',
                        'emails'       => 'E-mails',
                        'by-user'      => 'Por usuário',
                        'scheduled-on' => 'Agendado em',
                        'location'     => 'Localização',
                        'participants' => 'Participantes',
                        'mark-as-done' => 'Marcar como Concluído',
                        'delete'       => 'Excluir',
                        'edit'         => 'Editar',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'E-mail',
                            'title'    => 'Escrever e-mail',
                            'to'       => 'Para',
                            'cc'       => 'Cópia',
                            'bcc'      => 'Cópia oculta',
                            'subject'  => 'Assunto',
                            'send-btn' => 'Enviar',
                            'message'  => 'Mensagem',
                        ],

                        'file' => [
                            'btn'           => 'Arquivo',
                            'title'         => 'Adicionar Arquivo',
                            'title-control' => 'Título',
                            'name'          => 'Nome do Arquivo',
                            'description'   => 'Descrição',
                            'file'          => 'Arquivo',
                            'save-btn'      => 'Salvar Arquivo',
                        ],

                        'note' => [
                            'btn'      => 'Nota',
                            'title'    => 'Adicionar Nota',
                            'comment'  => 'Comentário',
                            'save-btn' => 'Salvar Nota',
                        ],

                        'activity' => [
                            'btn'           => 'Atividade',
                            'title'         => 'Adicionar Atividade',
                            'title-control' => 'Título',
                            'description'   => 'Descrição',
                            'schedule-from' => 'Agendar De',
                            'schedule-to'   => 'Agendar Até',
                            'location'      => 'Localização',
                            'call'          => 'Chamada',
                            'meeting'       => 'Reunião',
                            'lunch'         => 'Almoço',
                            'save-btn'      => 'Salvar Atividade',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'Adicionar Pessoa',
                'save-btn' => 'Salvar Pessoa',
            ],

            'edit' => [
                'title'    => 'Editar Pessoa',
                'save-btn' => 'Salvar Pessoa',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Empresas',
                'create-btn'     => 'Adicionar Empresa',
                'create-success' => 'Empresa adicionada com sucesso.',
                'update-success' => 'Empresa atualizada com sucesso.',
                'delete-success' => 'Empresa excluída com sucesso.',
                'delete-failed'  => 'Não foi possível excluir a empresa.',

                'datagrid' => [
                    'delete'        => 'Excluir',
                    'edit'          => 'Editar',
                    'id'            => 'ID',
                    'name'          => 'Nome',
                    'persons-count' => 'Quantidade de Pessoas',
                ],
            ],

            'create' => [
                'title'    => 'Adicionar Empresa',
                'save-btn' => 'Salvar Empresa',
            ],

            'edit' => [
                'title'    => 'Editar Empresa',
                'save-btn' => 'Salvar Empresa',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Produtos',
            'create-btn'     => 'Adicionar Produto',
            'create-success' => 'Produto adicionado com sucesso.',
            'update-success' => 'Produto atualizado com sucesso.',
            'delete-success' => 'Produto excluído com sucesso.',
            'delete-failed'  => 'Não foi possível excluir o produto.',

            'datagrid'   => [
                'allocated' => 'Alocado',
                'delete'    => 'Excluir',
                'edit'      => 'Editar',
                'id'        => 'ID',
                'in-stock'  => 'Em Estoque',
                'name'      => 'Nome',
                'on-hand'   => 'Disponível',
                'price'     => 'Preço',
                'sku'       => 'Código',
                'view'      => 'Visualizar',
            ],
        ],

        'create' => [
            'save-btn'  => 'Salvar Produtos',
            'title'     => 'Adicionar Produtos',
            'general'   => 'Geral',
            'price'     => 'Preço',
        ],

        'edit' => [
            'title'     => 'Editar Produtos',
            'save-btn'  => 'Salvar Produtos',
            'general'   => 'Geral',
            'price'     => 'Preço',
        ],

        'view' => [
            'sku'         => 'Código',
            'all'         => 'Todos',
            'notes'       => 'Notas',
            'files'       => 'Arquivos',
            'inventories' => 'Inventário',
            'change-logs' => 'Histórico de Alterações',

            'attributes' => [
                'about-product' => 'Sobre o Produto',
            ],

            'inventory' => [
                'source'     => 'Origem',
                'in-stock'   => 'Em Estoque',
                'allocated'  => 'Alocado',
                'on-hand'    => 'Disponível',
                'actions'    => 'Ações',
                'assign'     => 'Atribuir',
                'add-source' => 'Adicionar Origem',
                'location'   => 'Localização',
                'add-more'   => 'Adicionar Mais',
                'save'       => 'Salvar',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Configurações',

        'groups' => [
            'index' => [
                'create-btn'        => 'Adicionar Grupo',
                'title'             => 'Grupos',
                'create-success'    => 'Grupo adicionado com sucesso.',
                'update-success'    => 'Grupo atualizado com sucesso.',
                'destroy-success'   => 'Grupo excluído com sucesso.',
                'delete-failed'     => 'Não foi possível excluir o grupo.',

                'datagrid'   => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],

                'edit' => [
                    'title' => 'Editar Grupo',
                ],

                'create' => [
                    'name'        => 'Nome',
                    'title'       => 'Adicionar Grupo',
                    'description' => 'Descrição',
                    'save-btn'    => 'Salvar Grupo',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'Não é possível excluir o cargo, pois está sendo usado por um usuário administrador.',
                'create-btn'                => 'Adicionar Cargos',
                'create-success'            => 'Cargo adicionado com sucesso.',
                'current-role-delete-error' => 'Não é possível excluir o cargo atribuído ao usuário atual.',
                'delete-failed'             => 'Não foi possível excluir o cargo.',
                'delete-success'            => 'Cargo excluído com sucesso.',
                'last-delete-error'         => 'É necessário pelo menos um cargo.',
                'settings'                  => 'Configurações',
                'title'                     => 'Cargos',
                'update-success'            => 'Cargo atualizado com sucesso.',
                'user-define-error'         => 'Não é possível excluir cargo do sistema.',

                'datagrid'   => [
                    'all'             => 'Todos',
                    'custom'          => 'Personalizado',
                    'delete'          => 'Excluir',
                    'description'     => 'Descrição',
                    'edit'            => 'Editar',
                    'id'              => 'ID',
                    'name'            => 'Nome',
                    'permission-type' => 'Tipo de Permissão',
                ],
            ],

            'create' => [
                'access-control' => 'Controle de Acesso',
                'all'            => 'Todos',
                'back-btn'       => 'Voltar',
                'custom'         => 'Personalizado',
                'description'    => 'Descrição',
                'general'        => 'Geral',
                'name'           => 'Nome',
                'permissions'    => 'Permissões',
                'save-btn'       => 'Salvar Cargo',
                'title'          => 'Adicionar Cargo',
            ],

            'edit' => [
                'access-control' => 'Controle de Acesso',
                'all'            => 'Todos',
                'back-btn'       => 'Voltar',
                'custom'         => 'Personalizado',
                'description'    => 'Descrição',
                'general'        => 'Geral',
                'name'           => 'Nome',
                'permissions'    => 'Permissões',
                'save-btn'       => 'Salvar Cargo',
                'title'          => 'Editar Cargo',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'Adicionar Tipo',
                'create-success' => 'Tipo adicionado com sucesso.',
                'delete-failed'  => 'Não é possível excluir o tipo.',
                'delete-success' => 'Tipo excluído com sucesso.',
                'title'          => 'Tipos',
                'update-success' => 'Tipo atualizado com sucesso.',

                'datagrid' => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Tipo',
                    'title'    => 'Adicionar Tipo',
                ],

                'edit' => [
                    'title' => 'Editar Tipo',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Adicionar Origem',
                'create-success' => 'Origem adicionada com sucesso.',
                'delete-failed'  => 'Não é possível excluir a origem.',
                'delete-success' => 'Origem excluída com sucesso.',
                'title'          => 'Origens',
                'update-success' => 'Origem atualizada com sucesso.',

                'datagrid' => [
                    'delete' => 'Excluir',
                    'edit'   => 'Editar',
                    'id'     => 'ID',
                    'name'   => 'Nome',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Origem',
                    'title'    => 'Adicionar Origem',
                ],

                'edit' => [
                    'title' => 'Editar Origem',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'Workflows',
                'create-btn'     => 'Adicionar Workflow',
                'create-success' => 'Workflow adicionado com sucesso.',
                'update-success' => 'Workflow atualizado com sucesso.',
                'delete-success' => 'Workflow excluído com sucesso.',
                'delete-failed'  => 'Não é possível excluir o Workflow.',
                'datagrid'       => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'Atualizar leads relacionados',
                'send-email-to-sales-owner'  => 'Enviar e-mail para o proprietário de vendas',
                'send-email-to-participants' => 'Enviar e-mail para os participantes',
                'add-webhook'                => 'Adicionar Webhook',
                'update-lead'                => 'Atualizar Oportunidade',
                'update-person'              => 'Atualizar Pessoa',
                'send-email-to-person'       => 'Enviar e-mail para a pessoa',
                'add-tag'                    => 'Adicionar Tag',
                'add-note-as-activity'       => 'Adicionar Nota como Atividade',
            ],

            'create' => [
                'title'                  => 'Adicionar Workflow',
                'event'                  => 'Evento',
                'back-btn'               => 'Voltar',
                'save-btn'               => 'Salvar Workflow',
                'name'                   => 'Nome',
                'basic-details'          => 'Detalhes Básicos',
                'description'            => 'Descrição',
                'actions'                => 'Ações',
                'basic-details-info'     => 'Informe as informações básicas do workflow.',
                'event-info'             => 'Um evento dispara, verifica, aplica condições e executa ações predefinidas.',
                'conditions'             => 'Condições',
                'conditions-info'        => 'As condições são regras que verificam cenários, acionadas em ocasiões específicas.',
                'actions-info'           => 'Uma ação não apenas reduz a carga de trabalho, mas também facilita a automação do CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condição',
                'all-condition-are-true' => 'Todas as condições são verdadeiras',
                'any-condition-are-true' => 'Qualquer condição é verdadeira',
                'add-condition'          => 'Adicionar Condição',
                'add-action'             => 'Adicionar Ação',
                'yes'                    => 'Sim',
                'no'                     => 'Não',
                'email'                  => 'E-mail',
                'is-equal-to'            => 'É igual a',
                'is-not-equal-to'        => 'Não é igual a',
                'equals-or-greater-than' => 'É igual ou maior que',
                'equals-or-less-than'    => 'É igual ou menor que',
                'greater-than'           => 'Maior que',
                'less-than'              => 'Menor que',
                'type'                   => 'Tipo',
                'contain'                => 'Contém',
                'contains'               => 'Contém',
                'does-not-contain'       => 'Não contém',
            ],

            'edit' => [
                'title'                  => 'Editar Workflow',
                'event'                  => 'Evento',
                'back-btn'               => 'Voltar',
                'save-btn'               => 'Salvar Workflow',
                'name'                   => 'Nome',
                'basic-details'          => 'Detalhes Básicos',
                'description'            => 'Descrição',
                'actions'                => 'Ações',
                'type'                   => 'Tipo',
                'basic-details-info'     => 'Informe as informações básicas do workflow.',
                'event-info'             => 'Um evento dispara, verifica, aplica condições e executa ações predefinidas.',
                'conditions'             => 'Condições',
                'conditions-info'        => 'As condições são regras que verificam cenários, acionadas em ocasiões específicas.',
                'actions-info'           => 'Uma ação não apenas reduz a carga de trabalho, mas também facilita a automação do CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condição',
                'all-condition-are-true' => 'Todas as condições são verdadeiras',
                'any-condition-are-true' => 'Qualquer condição é verdadeira',
                'add-condition'          => 'Adicionar Condição',
                'add-action'             => 'Adicionar Ação',
                'yes'                    => 'Sim',
                'no'                     => 'Não',
                'email'                  => 'E-mail',
                'is-equal-to'            => 'É igual a',
                'is-not-equal-to'        => 'Não é igual a',
                'equals-or-greater-than' => 'É igual ou maior que',
                'equals-or-less-than'    => 'É igual ou menor que',
                'greater-than'           => 'Maior que',
                'less-than'              => 'Menor que',
                'contain'                => 'Contém',
                'contains'               => 'Contém',
                'does-not-contain'       => 'Não contém',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webforms',
                'create-btn'     => 'Adicionar Webform',
                'create-success' => 'Webform adicionado com sucesso.',
                'update-success' => 'Webform atualizado com sucesso.',
                'delete-success' => 'Webform excluído com sucesso.',
                'delete-failed'  => 'Não é possível excluir o Webform.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Título',
                    'edit'   => 'Editar',
                    'delete' => 'Excluir',
                ],
            ],

            'create' => [
                'title'                    => 'Adicionar Webform',
                'add-attribute-btn'        => 'Adicionar Botão de Atributo',
                'attribute-label-color'    => 'Cor do Rótulo do Atributo',
                'attributes'               => 'Atributos',
                'attributes-info'          => 'Adicione atributos personalizados ao formulário.',
                'background-color'         => 'Cor de Fundo',
                'create-lead'              => 'Adicionar Oportunidade',
                'customize-webform'        => 'Personalizar Webform',
                'customize-webform-info'   => 'Personalize seu formulário com as cores dos elementos de sua escolha.',
                'description'              => 'Descrição',
                'display-custom-message'   => 'Exibir mensagem personalizada',
                'form-background-color'    => 'Cor de Fundo do Formulário',
                'form-submit-btn-color'    => 'Cor do Botão de Envio do Formulário',
                'form-submit-button-color' => 'Cor do Botão de Envio do Formulário',
                'form-title-color'         => 'Cor do Título do Formulário',
                'general'                  => 'Geral',
                'leads'                    => 'Oportunidades',
                'person'                   => 'Pessoa',
                'save-btn'                 => 'Salvar Webform',
                'submit-button-label'      => 'Rótulo do Botão de Envio',
                'submit-success-action'    => 'Ação de Sucesso ao Enviar',
                'redirect-to-url'          => 'Redirecionar Para URL',
                'choose-value'             => 'Escolher Valor',
                'select-file'              => 'Selecionar Arquivo',
                'select-image'             => 'Selecionar Imagem',
                'enter-value'              => 'Inserir Valor',
            ],

            'edit' => [
                'title'                     => 'Editar Webform',
                'add-attribute-btn'         => 'Adicionar Botão de Atributo',
                'attribute-label-color'     => 'Cor do Rótulo do Atributo',
                'attributes'                => 'Atributos',
                'attributes-info'           => 'Adicione atributos personalizados ao formulário.',
                'background-color'          => 'Cor de Fundo',
                'code-snippet'              => 'Trecho de Código',
                'copied'                    => 'Copiado',
                'copy'                      => 'Copiar',
                'create-lead'               => 'Adicionar Oportunidade',
                'customize-webform'         => 'Personalizar Webform',
                'customize-webform-info'    => 'Personalize seu formulário com as cores dos elementos de sua escolha.',
                'description'               => 'Descrição',
                'display-custom-message'    => 'Exibir mensagem personalizada',
                'embed'                     => 'Incorporar',
                'form-background-color'     => 'Cor de Fundo do Formulário',
                'form-submit-btn-color'     => 'Cor do Botão de Envio do Formulário',
                'form-submit-button-color'  => 'Cor do Botão de Envio do Formulário',
                'form-title-color'          => 'Cor do Título do Formulário',
                'general'                   => 'Geral',
                'leads'                     => 'Oportunidades',
                'preview'                   => 'Visualizar',
                'person'                    => 'Pessoa',
                'public-url'                => 'URL Pública',
                'redirect-to-url'           => 'Redirecionar Para URL',
                'save-btn'                  => 'Salvar Webform',
                'submit-button-label'       => 'Rótulo do Botão de Envio',
                'submit-success-action'     => 'Ação de Sucesso ao Enviar',
                'choose-value'              => 'Escolher Valor',
                'select-file'               => 'Selecionar Arquivo',
                'select-image'              => 'Selecionar Imagem',
                'enter-value'               => 'Inserir Valor',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'Adicionar Modelo de E-mail',
                'title'          => 'Modelos de E-mail',
                'create-success' => 'Modelo de E-mail adicionado com sucesso.',
                'update-success' => 'Modelo de E-mail atualizado com sucesso.',
                'delete-success' => 'Modelo de E-mail excluído com sucesso.',
                'delete-failed'  => 'Não é possível excluir o Modelo de E-mail.',

                'datagrid'   => [
                    'delete'       => 'Excluir',
                    'edit'         => 'Editar',
                    'id'           => 'ID',
                    'name'         => 'Nome',
                    'subject'      => 'Assunto',
                ],
            ],

            'create'     => [
                'title'                => 'Adicionar Modelo de E-mail',
                'save-btn'             => 'Salvar Modelo de E-mail',
                'email-template'       => 'Modelo de E-mail',
                'subject'              => 'Assunto',
                'content'              => 'Conteúdo',
                'subject-placeholders' => 'Descrição do Assunto',
                'general'              => 'Geral',
                'name'                 => 'Nome',
            ],

            'edit' => [
                'title'                => 'Editar Modelo de E-mail',
                'save-btn'             => 'Salvar Modelo de E-mail',
                'email-template'       => 'Modelo de E-mail',
                'subject'              => 'Assunto',
                'content'              => 'Conteúdo',
                'subject-placeholders' => 'Descrição do Assunto',
                'general'              => 'Geral',
                'name'                 => 'Nome',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'Adicionar Evento',
                    'title'               => 'Eventos',
                    'create-success'      => 'Evento adicionado com sucesso.',
                    'update-success'      => 'Evento atualizado com sucesso.',
                    'delete-success'      => 'Evento excluído com sucesso.',
                    'delete-failed'       => 'Não é possível excluir o evento.',
                    'mass-delete-success' => 'Eventos excluídos com sucesso',

                    'datagrid'   => [
                        'delete'       => 'Excluir',
                        'edit'         => 'Editar',
                        'id'           => 'ID',
                        'name'         => 'Nome',
                        'description'  => 'Descrição',
                        'date'         => 'Data',
                    ],

                    'create'     => [
                        'title'       => 'Adicionar Evento',
                        'name'        => 'Nome',
                        'date'        => 'Data',
                        'description' => 'Descrição',
                        'save-btn'    => 'Salvar Evento',
                    ],

                    'edit' => [
                        'title' => 'Editar Evento',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'Adcionar Campanha',
                    'title'               => 'Campanhas',
                    'create-success'      => 'Campanha adicionada com sucesso.',
                    'update-success'      => 'Campanha atualizada com sucesso.',
                    'delete-success'      => 'Campanha excluída com sucesso.',
                    'delete-failed'       => 'Não é possível excluir a campanha.',
                    'mass-delete-success' => 'Campanhas excluídas com sucesso',

                    'datagrid'   => [
                        'id'       => 'ID',
                        'name'     => 'Nome',
                        'subject'  => 'Assunto',
                        'status'   => 'Status',
                        'active'   => 'Ativo',
                        'inactive' => 'Inativo',
                        'edit'     => 'Editar',
                        'delete'   => 'Excluir',
                    ],

                    'create'     => [
                        'title'          => 'Adicionar Campanha',
                        'name'           => 'Nome',
                        'type'           => 'Tipo',
                        'subject'        => 'Assunto',
                        'event'          => 'Evento',
                        'email-template' => 'Modelo de E-mail',
                        'status'         => 'Status',
                    ],

                    'edit' => [
                        'title' => 'Editar Campanha',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Adicionar Tag',
                'title'          => 'Tags',
                'create-success' => 'Tag adicionada com sucesso.',
                'update-success' => 'Tag atualizada com sucesso.',
                'delete-success' => 'Tag excluída com sucesso.',
                'delete-failed'  => 'Não é possível excluir a Tag.',

                'datagrid' => [
                    'delete'      => 'Excluir',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                    'users'       => 'Usuários',
                    'created-at'  => 'Criado Em',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Tag',
                    'title'    => 'Adicionar Tag',
                    'color'    => 'Cor',
                ],

                'edit' => [
                    'title' => 'Editar Tag',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Adicionar Usuário',
                'create-success'      => 'Usuário adicionado com sucesso.',
                'delete-failed'       => 'Não foi possível excluir o usuário.',
                'delete-success'      => 'Usuário excluído com sucesso.',
                'last-delete-error'   => 'É necessário pelo menos um usuário.',
                'mass-delete-failed'  => 'Não foi possível excluir os usuários.',
                'mass-delete-success' => 'Usuários excluídos com sucesso.',
                'mass-update-failed'  => 'Não foi possível atualizar os usuários.',
                'mass-update-success' => 'Usuários atualizados com sucesso.',
                'title'               => 'Usuários',
                'update-success'      => 'Usuário atualizado com sucesso.',
                'user-define-error'   => 'Não é possível excluir o usuário do sistema.',
                'active'              => 'Ativo',
                'inactive'            => 'Inativo',

                'datagrid' => [
                    'active'        => 'Ativo',
                    'created-at'    => 'Criado Em',
                    'delete'        => 'Excluir',
                    'edit'          => 'Editar',
                    'email'         => 'E-mail',
                    'id'            => 'ID',
                    'inactive'      => 'Inativo',
                    'name'          => 'Nome',
                    'status'        => 'Status',
                    'update-status' => 'Atualizar Status',
                    'users'         => 'Usuários',
                ],

                'create' => [
                    'confirm-password' => 'Confirmar Senha',
                    'email'            => 'E-mail',
                    'general'          => 'Geral',
                    'global'           => 'Global',
                    'group'            => 'Grupo',
                    'individual'       => 'Individual',
                    'name'             => 'Nome',
                    'password'         => 'Senha',
                    'permission'       => 'Permissão',
                    'role'             => 'Função',
                    'save-btn'         => 'Salvar Usuário',
                    'status'           => 'Status',
                    'title'            => 'Adicionar Usuário',
                    'view-permission'  => 'Visualizar Permissão',
                ],

                'edit' => [
                    'title' => 'Editar Usuário',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Funis',
                'create-btn'           => 'Adicionar Funil',
                'create-success'       => 'Funil adicionado com sucesso.',
                'update-success'       => 'Funil atualizado com sucesso.',
                'delete-success'       => 'Funil excluído com sucesso.',
                'delete-failed'        => 'Não foi possível excluir o funil.',
                'default-delete-error' => 'Não é possível excluir o funil padrão.',

                'datagrid' => [
                    'delete'      => 'Excluir',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'is-default'  => 'É Padrão',
                    'name'        => 'Nome',
                    'no'          => 'Não',
                    'rotten-days' => 'Dias parado nesta etapa',
                    'yes'         => 'Sim',
                ],
            ],

            'create' => [
                'title'                => 'Adicionar Funil',
                'save-btn'             => 'Salvar Funil',
                'name'                 => 'Nome',
                'rotten-days'          => 'Dias parado nesta etapa',
                'mark-as-default'      => 'Marcar como Padrão',
                'general'              => 'Geral',
                'probability'          => 'Probabilidade (%)',
                'new-stage'            => 'Novo',
                'won-stage'            => 'Ganho',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Adicionar Estágio',
                'stages'               => 'Estágios',
                'duplicate-name'       => 'O campo "Nome" não pode ser duplicado',
                'delete-stage'         => 'Excluir Estágio',
                'add-new-stages'       => 'Adicionar Novos Estágios',
                'add-stage-info'       => 'Adicionar novo estágio para o seu Funil',
                'newly-added'          => 'Adicionado Recentemente',
                'stage-delete-success' => 'Estágio excluído com sucesso',
            ],

            'edit'  => [
                'title'                => 'Editar Funil',
                'save-btn'             => 'Salvar Funil',
                'name'                 => 'Nome',
                'rotten-days'          => 'Dias parado nesta etapa',
                'mark-as-default'      => 'Marcar como Padrão',
                'general'              => 'Geral',
                'probability'          => 'Probabilidade (%)',
                'new-stage'            => 'Novo',
                'won-stage'            => 'Ganho',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Adicionar Estágio',
                'stages'               => 'Estágios',
                'duplicate-name'       => 'O campo "Nome" não pode ser duplicado',
                'delete-stage'         => 'Excluir Estágio',
                'add-new-stages'       => 'Adicionar Novos Estágios',
                'add-stage-info'       => 'Adicionar novo estágio para o seu Funil',
                'stage-delete-success' => 'Estágio excluído com sucesso',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Adicionar Webhook',
                'create-success' => 'Webhook adicionado com sucesso.',
                'update-success' => 'Webhook atualizado com sucesso.',
                'delete-success' => 'Webhook deletado com sucesso.',
                'delete-failed'  => 'Webhook não pode ser deletado.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Deletar',
                    'edit'        => 'Editar',
                    'name'        => 'Nome',
                    'entity-type' => 'Tipo de Entidade',
                    'end-point'   => 'Ponto de Acesso',
                ],
            ],

            'create' => [
                'title'                 => 'Adcionar Webhook',
                'save-btn'              => 'Salvar Webhook',
                'info'                  => 'Digite os detalhes dos webhooks',
                'url-and-parameters'    => 'URL e Parâmetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Endpoint da URL',
                'parameters'            => 'Parâmetros',
                'add-new-parameter'     => 'Adicionar Novo Parâmetro',
                'url-preview'           => 'Pré-visualização da URL:',
                'headers'               => 'Cabeçalhos',
                'add-new-header'        => 'Adicionar Novo Cabeçalho',
                'body'                  => 'Corpo',
                'default'               => 'Padrão',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Chave e Valor',
                'add-new-payload'       => 'Adicionar novo payload',
                'raw'                   => 'Raw',
                'general'               => 'Geral',
                'name'                  => 'Nome',
                'entity-type'           => 'Tipo de Entidade',
                'insert-placeholder'    => 'Inserir Placeholder',
                'description'           => 'Descrição',
                'json'                  => 'Json',
                'text'                  => 'Texto',
            ],

            'edit' => [
                'title'                 => 'Editar Webhook',
                'edit-btn'              => 'Salvar Webhook',
                'save-btn'              => 'Salvar Webhook',
                'info'                  => 'Digite os detalhes dos webhooks',
                'url-and-parameters'    => 'URL e Parâmetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Endpoint da URL',
                'parameters'            => 'Parâmetros',
                'add-new-parameter'     => 'Adicionar Novo Parâmetro',
                'url-preview'           => 'Pré-visualização da URL:',
                'headers'               => 'Cabeçalhos',
                'add-new-header'        => 'Adicionar Novo Cabeçalho',
                'body'                  => 'Corpo',
                'default'               => 'Padrão',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Chave e Valor',
                'add-new-payload'       => 'Adicionar novo payload',
                'raw'                   => 'Raw',
                'general'               => 'Geral',
                'name'                  => 'Nome',
                'entity-type'           => 'Tipo de Entidade',
                'insert-placeholder'    => 'Inserir Placeholder',
                'description'           => 'Descrição',
                'json'                  => 'Json',
                'text'                  => 'Texto',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Depósitos',
                'create-btn'     => 'Adicionar Depósito',
                'create-success' => 'Depósito adicionado com sucesso.',
                'name-exists'    => 'Nome do depósito já existe.',
                'update-success' => 'Depósito atualizado com sucesso.',
                'delete-success' => 'Depósito deletado com sucesso.',
                'delete-failed'  => 'Depósito não pode ser deletado.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Nome',
                    'contact-name'    => 'Nome de Contato',
                    'delete'          => 'Deletar',
                    'edit'            => 'Editar',
                    'view'            => 'Visualizar',
                    'created-at'      => 'Criado em',
                    'products'        => 'Produtos',
                    'contact-emails'  => 'Emails de Contato',
                    'contact-numbers' => 'Números de Contato',
                ],
            ],

            'create' => [
                'title'         => 'Adicionar Depósito',
                'save-btn'      => 'Salvar Depósito',
                'contact-info'  => 'Informações de Contato',
            ],

            'edit' => [
                'title'         => 'Editar Depósito',
                'save-btn'      => 'Salvar Depósito',
                'contact-info'  => 'Informações de Contato',
            ],

            'view' => [
                'all'         => 'Todos',
                'notes'       => 'Notas',
                'files'       => 'Arquivos',
                'location'    => 'Localização',
                'change-logs' => 'Registros de Alterações',

                'locations' => [
                    'action'         => 'Ação',
                    'add-location'   => 'Adicionar Localização',
                    'create-success' => 'Localização adicionada com sucesso.',
                    'delete'         => 'Deletar',
                    'delete-failed'  => 'Localização não pode ser deletada.',
                    'delete-success' => 'Localização deletada com sucesso.',
                    'name'           => 'Nome',
                    'save-btn'       => 'Salvar',
                ],

                'general-information' => [
                    'title' => 'Informações Gerais',
                ],

                'contact-information' => [
                    'title' => 'Informações de Contato',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Atributos',
                'create-btn'         => 'Adicionar Atributo',
                'create-success'     => 'Atributo criados com sucesso.',
                'update-success'     => 'Atributo atualizados com sucesso.',
                'delete-success'     => 'Atributo deletados com sucesso.',
                'delete-failed'      => 'Atributo não podem ser deletados.',
                'user-define-error'  => 'Não é possível deletar atributos do sistema.',
                'mass-delete-failed' => 'Atributos do sistema não podem ser deletados.',

                'datagrid' => [
                    'yes'         => 'Sim',
                    'no'          => 'Não',
                    'id'          => 'ID',
                    'code'        => 'Código',
                    'name'        => 'Nome',
                    'entity-type' => 'Tipo de Entidade',
                    'type'        => 'Tipo',
                    'is-default'  => 'É Padrão',
                    'edit'        => 'Editar',
                    'delete'      => 'Deletar',

                    'entity-types' => [
                        'leads'         => 'Oportunidades',
                        'organizations' => 'Empresas',
                        'persons'       => 'Pessoas',
                        'products'      => 'Produtos',
                        'quotes'        => 'Cotações',
                        'warehouses'    => 'Depósitos',
                    ],

                    'types'       => [
                        'address'  => 'Endereço',
                        'date'     => 'Data',
                        'email'    => 'E-mail',
                        'lookup'   => 'Pesquisa',
                        'phone'    => 'Telefone',
                        'price'    => 'Preço',
                        'select'   => 'Seleção',
                        'text'     => 'Texto',
                        'textarea' => 'Área de Texto',
                    ],
                ],
            ],

            'create'  => [
                'actions'               => 'Ações',
                'add-attribute-options' => 'Adicionar Opções de Atributo',
                'add-option'            => 'Adicionar Opção',
                'address'               => 'Endereço',
                'boolean'               => 'Verdadeiro ou falso',
                'checkbox'              => 'Caixa de Seleção',
                'code'                  => 'Código',
                'date'                  => 'Data',
                'datetime'              => 'Data e Hora',
                'decimal'               => 'Decimal',
                'email'                 => 'E-mail',
                'entity-type'           => 'Tipo de Entidade',
                'entity_type'           => 'Tipo de Entidade',
                'file'                  => 'Arquivo',
                'general'               => 'Geral',
                'image'                 => 'Imagem',
                'input-validation'      => 'Validação de Entrada',
                'is-required'           => 'É Obrigatório',
                'is-unique'             => 'É Único',
                'is_required'           => 'É Obrigatório',
                'is_unique'             => 'É Único',
                'labels'                => 'Rótulos',
                'lookup'                => 'Pesquisa',
                'lookup-type'           => 'Tipo de Pesquisa',
                'multiselect'           => 'Multiseleção',
                'name'                  => 'Nome',
                'numeric'               => 'Numérico',
                'option-deleted'        => 'Opção de Atributo excluída com sucesso',
                'option-name'           => 'Nome da Opção',
                'option-type'           => 'Tipo de Opção',
                'options'               => 'Opções',
                'phone'                 => 'Telefone',
                'price'                 => 'Preço',
                'save-btn'              => 'Salvar Atributo',
                'save-option'           => 'Salvar Opção',
                'select'                => 'Seleção',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'title'                 => 'Adicionar Atributo',
                'type'                  => 'Tipo',
                'url'                   => 'URL',
                'validations'           => 'Validações',
            ],

            'edit'  => [
                'title'                 => 'Editar Atributo',
                'save-btn'              => 'Salvar Atributo',
                'code'                  => 'Código',
                'name'                  => 'Nome',
                'labels'                => 'Rótulos',
                'entity-type'           => 'Tipo de Entidade',
                'type'                  => 'Tipo',
                'validations'           => 'Validações',
                'is-required'           => 'É Obrigatório',
                'input-validation'      => 'Validação de Entrada',
                'is-unique'             => 'É Único',
                'general'               => 'Geral',
                'numeric'               => 'Numérico',
                'decimal'               => 'Decimal',
                'url'                   => 'URL',
                'options'               => 'Opções',
                'option-type'           => 'Tipo de Opção',
                'lookup-type'           => 'Tipo de Pesquisa',
                'add-option'            => 'Adicionar Opção',
                'save-option'           => 'Salvar Opção',
                'option-name'           => 'Nome da Opção',
                'add-attribute-options' => 'Adicionar Opções de Atributo',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'price'                 => 'Preço',
                'boolean'               => 'Verdadeiro ou falso',
                'select'                => 'Seleção',
                'multiselect'           => 'Multiseleção',
                'email'                 => 'E-mail',
                'address'               => 'Endereço',
                'phone'                 => 'Telefone',
                'datetime'              => 'Data e Hora',
                'date'                  => 'Data',
                'image'                 => 'Imagem',
                'file'                  => 'Arquivo',
                'lookup'                => 'Pesquisa',
                'entity_type'           => 'Tipo de Entidade',
                'checkbox'              => 'Caixa de Seleção',
                'is_required'           => 'É Obrigatório',
                'is_unique'             => 'É Único',
                'actions'               => 'Ações',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Atividades',

            'datagrid' => [
                'comment'       => 'Comentário',
                'created_at'    => 'Criado Em',
                'created_by'    => 'Criado Por',
                'edit'          => 'Editar',
                'id'            => 'ID',
                'done'          => 'Concluído',
                'not-done'      => 'Não Concluído',
                'lead'          => 'Oportunidade',
                'mass-delete'   => 'Excluir em Massa',
                'mass-update'   => 'Atualizar em Massa',
                'schedule-from' => 'Agendado de',
                'schedule-to'   => 'Agendado até',
                'schedule_from' => 'Agendado de',
                'schedule_to'   => 'Agendado até',
                'title'         => 'Título',
                'is_done'       => 'Está Concluído',
                'type'          => 'Tipo',
                'update'        => 'Atualizar',
                'call'          => 'Chamada',
                'meeting'       => 'Reunião',
                'lunch'         => 'Almoço',
            ],
        ],

        'edit' => [
            'title'           => 'Editar Atividade',
            'back-btn'        => 'Voltar',
            'save-btn'        => 'Salvar Atividade',
            'type'            => 'Tipo de Atividade',
            'call'            => 'Chamada',
            'meeting'         => 'Reunião',
            'lunch'           => 'Almoço',
            'schedule_to'     => 'Agendado até',
            'schedule_from'   => 'Agendado de',
            'location'        => 'Localização',
            'comment'         => 'Comentário',
            'lead'            => 'Oportunidade',
            'participants'    => 'Participantes',
            'general'         => 'Geral',
            'persons'         => 'Pessoas',
            'no-result-found' => 'Nenhum registro encontrado.',
            'users'           => 'Usuários',
        ],

        'updated'              => 'Atualizado',
        'created'              => 'Criado',
        'duration-overlapping' => 'Os participantes têm outra reunião neste horário. Deseja continuar?',
        'create-success'       => 'Atividade adicionada com sucesso.',
        'update-success'       => 'Atividade atualizada com sucesso.',
        'overlapping-error'    => 'Os participantes têm outra reunião neste horário.',
        'mass-update-success'  => 'Atividades atualizadas com sucesso.',
        'destroy-success'      => 'Atividade deletada com sucesso.',
        'delete-failed'        => 'A atividade não pode ser deletada.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Escrever',
            'draft'             => 'Rascunho',
            'inbox'             => 'Caixa de Entrada',
            'outbox'            => 'Caixa de Saída',
            'sent'              => 'Enviado',
            'trash'             => 'Lixeira',
            'compose-mail-btn'  => 'Escrever E-mail',
            'btn'               => 'E-mail',
            'mail'              => [
                'title'         => 'Escrever E-mail',
                'to'            => 'Para',
                'enter-emails'  => 'Pressione Enter para adicionar e-mails',
                'cc'            => 'Cópia',
                'bcc'           => 'Cópia oculta',
                'subject'       => 'Assunto',
                'send-btn'      => 'Enviar',
                'message'       => 'Mensagem',
                'draft'         => 'Rascunho',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'De',
                'to'            => 'Para',
                'subject'       => 'Assunto',
                'tag-name'      => 'Nome da Tag',
                'created-at'    => 'Criado Em',
                'move-to-inbox' => 'Movido para Caixa de Entrada',
                'edit'          => 'Editar',
                'view'          => 'Visualizar',
                'delete'        => 'Excluir',
            ],
        ],

        'create-success'      => 'E-mail enviado com sucesso.',
        'update-success'      => 'E-mail atualizado com sucesso.',
        'mass-update-success' => 'E-mails atualizados com sucesso.',
        'delete-success'      => 'E-mail excluído com sucesso.',
        'delete-failed'       => 'E-mail não pode ser excluído.',

        'view' => [
            'title'                      => 'E-mails',
            'subject'                    => ':subject',
            'link-mail'                  => 'Link do E-mail',
            'to'                         => 'Para',
            'cc'                         => 'Cópia',
            'bcc'                        => 'Cópia oculta',
            'reply'                      => 'Responder',
            'reply-all'                  => 'Responder a Todos',
            'forward'                    => 'Encaminhar',
            'delete'                     => 'Excluir',
            'enter-mails'                => 'Digite o id do e-mail',
            'rotten-days'                => 'O negócio está sem movimentação há :days dias',
            'search-an-existing-lead'    => 'Pesquisar um negócio existente',
            'search-an-existing-contact' => 'Pesquisar um contato existente',
            'message'                    => 'Mensagem',
            'add-attachments'            => 'Adicionar Anexos',
            'discard'                    => 'Descartar',
            'send'                       => 'Enviar',
            'no-result-found'            => 'Nenhum resultado encontrado',
            'add-new-contact'            => 'Adicionar Novo Contato',
            'description'                => 'Descrição',
            'search'                     => 'Pesquisar...',
            'add-new-lead'               => 'Adicionar Nova Oportunidade',
            'create-new-contact'         => 'Adicionar Novo Contato',
            'save-contact'               => 'Salvar Contato',
            'create-lead'                => 'Adicionar Oportunidade',
            'linked-contact'             => 'Contato Vinculado',
            'link-to-contact'            => 'Vincular ao Contato',
            'link-to-lead'               => 'Vincular a uma Oportunidade',
            'linked-lead'                => 'Oportunidade Vinculado',
            'lead-details'               => 'Detalhes da Oportunidade',
            'contact-person'             => 'Pessoa de Contato',
            'product'                    => 'Produto',

            'tags' => [
                'create-success'  => 'Tag adicionada com sucesso.',
                'destroy-success' => 'Tag excluída com sucesso.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'add-more'             => 'Adicionar Mais',
            'address'              => 'Endereço',
            'city'                 => 'Cidade',
            'contact'              => 'Números de Contato',
            'country'              => 'País',
            'email'                => 'E-mail',
            'home'                 => 'Casa',
            'postcode'             => 'CEP',
            'save'                 => 'Salvar',
            'select'               => 'Selecionar',
            'select-country'       => 'Selecionar País',
            'select-state'         => 'Selecionar Estado',
            'state'                => 'Estado',
            'update-contact-title' => 'Atualizar Números de Contato',
            'update-emails-title'  => 'Atualizar E-mails de Contato',
            'work'                 => 'Trabalho',
        ],
    ],

    'leads' => [
        'create-success'    => 'Negócio adicionado com sucesso.',
        'update-success'    => 'Negócio atualizado com sucesso.',
        'destroy-success'   => 'Negócio excluído com sucesso.',
        'destroy-failed'    => 'Este negócio não pode ser excluído.',

        'file' => [
            'empty-content'    => 'O conteúdo do PDF está vazio ou não pôde ser extraído.',
            'invalid-format'   => 'Formato JSON inválido.',
            'invalid-response' => 'Formato de resposta AI inválido.',
            'missing-api-key'  => 'Chave API ou configuração do modelo ausente.',
            'not-found'        => 'Arquivo não encontrado.',
        ],

        'index' => [
            'title'      => 'Oportunidades',
            'create-btn' => 'Adicionar Negócio',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Vendedor',
                'subject'             => 'Assunto',
                'source'              => 'Origem',
                'lead-value'          => 'Valor do Negócio',
                'lead-type'           => 'Tipo de Negócio',
                'tag-name'            => 'Nome da Tag',
                'contact-person'      => 'Pessoa de Contato',
                'stage'               => 'Etapa',
                'rotten-lead'         => 'Negócio estagnado',
                'date-to'             => 'Data fechamento',
                'created-at'          => 'Criado em',
                'no'                  => 'Não',
                'yes'                 => 'Sim',
                'delete'              => 'Excluir',
                'mass-delete'         => 'Excluir em Massa',
                'mass-update'         => 'Atualizar em Massa',
            ],

            'kanban' => [
                'rotten-days'            => 'Negócio estagnado por :days dias',
                'empty-list'             => 'Sua lista de Negócios está vazia',
                'empty-list-description' => 'Adicione um negócio para organizar seus objetivos.',
                'create-lead-btn'        => 'Adicionar Negócio',

                'columns' => [
                    'contact-person'      => 'Pessoa de Contato',
                    'id'                  => 'ID',
                    'lead-type'           => 'Tipo de Negócio',
                    'lead-value'          => 'Valor do negócio',
                    'sales-person'        => 'Vendedor',
                    'source'              => 'Origem',
                    'title'               => 'Título',
                    'tags'                => 'Tags',
                    'expected-close-date' => 'Data Esperada de Fechamento',
                    'created-at'          => 'Criado em',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Pesquisar',
                    ],

                    'filters' => [
                        'apply-filters' => 'Aplicar Filtros',
                        'clear-all'     => 'Limpar Tudo',
                        'filter'        => 'Filtrar',
                        'filters'       => 'Filtros',
                        'from'          => 'De',
                        'select'        => 'Selecionar',
                        'to'            => 'Para',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Todos os Funis',
                'create-new-pipeline' => 'Adicionar Novo Funil',
            ],

            'upload' => [
                'create-lead'   => 'Adicionar Negócio Usando AI',
                'file'          => 'Upload de Arquivo',
                'file-info'     => 'Apenas arquivos em formato PDF são aceitos.',
                'file-required' => 'Por favor, selecione pelo menos um arquivo válido para prosseguir.',
                'sample-pdf'    => 'PDF de Exemplo',
                'save-btn'      => 'Salvar',
                'upload-pdf'    => 'Carregar PDF',
            ],
        ],

        'create' => [
            'title'          => 'Adicionar Negócio',
            'save-btn'       => 'Salvar',
            'details'        => 'Detalhes',
            'details-info'   => 'Coloque as informações básicas do Negócio',
            'contact-person' => 'Pessoa de Contato',
            'contact-info'   => 'Informações sobre a Pessoa de Contato',
            'products'       => 'Produtos',
            'products-info'  => 'Informações sobre os Produtos',
        ],

        'edit' => [
            'title'          => 'Editar Negócio',
            'save-btn'       => 'Salvar',
            'details'        => 'Detalhes',
            'details-info'   => 'Coloque as informações básicas do Negócio',
            'contact-person' => 'Pessoa de Contato',
            'contact-info'   => 'Informações sobre a Pessoa de Contato',
            'products'       => 'Produtos',
            'products-info'  => 'Informações sobre os Produtos',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Nome',
                'email'          => 'E-mail',
                'contact-number' => 'Número de Contato',
                'organization'   => 'Empresa',
            ],

            'products' => [
                'product-name' => 'Nome do Produto',
                'quantity'     => 'Quantidade',
                'price'        => 'Preço',
                'amount'       => 'Valor',
                'action'       => 'Ação',
                'add-more'     => 'Adicionar Mais',
                'total'        => 'Total',
            ],
        ],

        'view' => [
            'title'       => 'Negócio: :title',
            'rotten-days' => ':days Dias',

            'tabs'        => [
                'description' => 'Descrição',
                'products'    => 'Produtos',
                'quotes'      => 'Cotações',
            ],

            'attributes' => [
                'title' => 'Sobre o Negócio',
            ],

            'quotes'=> [
                'subject'         => 'Assunto',
                'expired-at'      => 'Expirado em',
                'sub-total'       => 'Subtotal',
                'discount'        => 'Desconto',
                'tax'             => 'Imposto',
                'adjustment'      => 'Ajuste',
                'grand-total'     => 'Total Geral',
                'delete'          => 'Excluir',
                'edit'            => 'Editar',
                'download'        => 'Baixar',
                'destroy-success' => 'Cotação excluída com sucesso.',
                'empty-title'     => 'Nenhuma Cotação Encontrada',
                'empty-info'      => 'Nenhuma Cotação Encontrada para este Negócio',
                'add-btn'         => 'Adicionar Cotação',
            ],

            'products' => [
                'product-name' => 'Nome do Produto',
                'quantity'     => 'Quantidade',
                'price'        => 'Preço',
                'amount'       => 'Valor',
                'action'       => 'Ação',
                'add-more'     => 'Adicionar Mais',
                'total'        => 'Total',
                'empty-title'  => 'Nenhum Produto Encontrado',
                'empty-info'   => 'Nenhum Produto Encontrado para este Negócio',
                'add-product'  => 'Adicionar Produto',
            ],

            'persons' => [
                'title'     => 'Sobre as Pessoas',
                'job-title' => ':job_title em :organization',
            ],

            'stages' => [
                'won-lost'       => 'Ganho/Perdido',
                'won'            => 'Ganho',
                'lost'           => 'Perdido',
                'need-more-info' => 'Precisa de Mais Informações',
                'closed-at'      => 'Fechado em',
                'won-value'      => 'Valor Ganhado',
                'lost-reason'    => 'Motivo da Perda',
                'save-btn'       => 'Salvar',
            ],

            'tags' => [
                'create-success'  => 'Tag adicionada com sucesso.',
                'destroy-success' => 'Tag excluída com sucesso.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'           => 'Voltar',
            'delete'         => 'Excluir',
            'save-btn'       => 'Salvar Configuração',
            'save-success'   => 'Configuração Salva com Sucesso.',
            'search'         => 'Pesquisar',
            'select-country' => 'Selecionar País',
            'select-state'   => 'Selecionar Estado',
            'title'          => 'Configuração',

            'general'  => [
                'title'   => 'Geral',
                'info'    => 'Configuração Geral',

                'general' => [
                    'title'           => 'Geral',
                    'info'            => 'Atualize suas configurações gerais aqui.',

                    'locale-settings' => [
                        'title'       => 'Configurações de Idioma',
                        'title-info'  => 'Define o idioma usado na interface do usuário.',
                    ],

                    'admin-logo' => [
                        'logo-image' => 'Imagem do Logo',
                        'title'      => 'Logo do Admin',
                        'title-info' => 'Configure a imagem do logo para o seu painel de administração.',
                    ],

                    'favicon' => [
                        'title'         => 'Favicon',
                        'title-info'    => 'Configure o ícone que será exibido nas abas do navegador.',
                        'favicon-image' => 'Imagem do Favicon',
                    ],
                ],
            ],

            'email' => [
                'title' => 'Configurações de E-mail',
                'info'  => 'Configuração de e-mail para a aplicação.',

                'imap' => [
                    'title' => 'Configurações IMAP',
                    'info'  => 'Configuração de e-mail IMAP para receber emails.',

                    'account' => [
                        'title'         => 'Conta IMAP',
                        'title-info'    => 'Configure as configurações da sua conta IMAP aqui.',
                        'host'          => 'Host',
                        'port'          => 'Porta',
                        'encryption'    => 'Tipo de Criptografia',
                        'validate-cert' => 'Validar Certificado SSL',
                        'username'      => 'Nome de Usuário IMAP',
                        'password'      => 'Senha IMAP',
                    ],
                ],
            ],

            'magic-ai' => [
                'title' => 'Magic AI',
                'info'  => 'Configuração do Magic AI para a aplicação.',

                'settings' => [
                    'accepted-types'      => 'Tipos aceitos',
                    'accepted-types-info' => 'Lista separada por vírgulas dos tipos de arquivos aceitos para geração de PDF.',
                    'api-key'             => 'Chave API',
                    'api-key-info'        => 'Lembre-se de usar uma chave API do OpenRouter para cada modelo. É um passo simples para melhorar a segurança e o desempenho.',
                    'enable'              => 'Habilitar',
                    'info'                => 'Melhore sua experiência com o Magic AI com sua chave API do OpenRouter. Integre-a agora para uma aventura de IA personalizada e perfeita, feita sob medida para você! Personalize as configurações com facilidade e assuma o controle da sua jornada de IA.',
                    'other'               => 'Outro Modelo',
                    'other-model'         => 'Para outros modelos, use o ID do Modelo do OpenRouter.',
                    'pdf-generation'      => 'Geração de PDF',
                    'pdf-generation-info' => 'Habilite o recurso de Geração de PDF para extrair automaticamente dados de arquivos PDF e convertê-los em formato de texto. Aumente sua produtividade e eficiência habilitando este recurso para simplificar seu fluxo de trabalho.',
                    'title'               => 'Configurações Gerais',

                    'models'     => [
                        'deepseek-r1'           => 'Deepseek R1 Distill-llama-8b',
                        'gemini-2-0-flash-001'  => 'Gemini 2.0 flash-001',
                        'gpt-4o'                => 'GPT-4.0',
                        'gpt-4o-mini'           => 'GPT-4.0 mini',
                        'grok-2-1212'           => 'Grok 2.12',
                        'llama-3-2-3b-instruct' => 'Llama 3.2 3b Instruct',
                        'title'                 => 'Modelos',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Configurações',
                'info'  => 'Atualize suas configurações aqui.',

                'footer' => [
                    'info'       => 'Podemos configurar a seção powered by aqui.',
                    'powered-by' => 'Editor de texto "Powered by"',
                    'title'      => 'Configurações da Seção Powered by',
                ],

                'menu' => [
                    'activities'     => 'Atividades',
                    'configuration'  => 'Configuração',
                    'contacts'       => 'Contatos',
                    'dashboard'      => 'Início',
                    'draft'          => 'Rascunho',
                    'inbox'          => 'Caixa de Entrada',
                    'info'           => 'Podemos configurar o nome dos itens do menu aqui.',
                    'leads'          => 'Oportunidades',
                    'mail'           => 'Correio',
                    'organizations'  => 'Empresas',
                    'outbox'         => 'Caixa de Saída',
                    'persons'        => 'Pessoas',
                    'products'       => 'Produtos',
                    'quotes'         => 'Cotações',
                    'sent'           => 'Enviado',
                    'settings'       => 'Configurações',
                    'title'          => 'Configurações de Itens do Menu',
                    'trash'          => 'Lixeira',
                ],

                'menu-color' => [
                    'active-background-color' => 'Cor de Fundo Ativa',
                    'active-text-color'       => 'Cor do Texto Ativo',
                    'info'                    => 'Podemos alterar as cores dos itens do menu aqui.',
                    'text-color'              => 'Cor do Texto',
                    'title'                   => 'Configurações de Cor dos Itens do Menu',
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Início',

            'revenue' => [
                'lost-revenue' => 'Negócios Perdidos',
                'won-revenue'  => 'Negócios Ganhos',
            ],

            'over-all' => [
                'average-lead-value'    => 'Ticket médio',
                'total-leads'           => 'Total de negócios',
                'average-leads-per-day' => 'Média de negócios por dia',
                'total-quotations'      => 'Total de cotações',
                'total-persons'         => 'Total de pessoas',
                'total-organizations'   => 'Total de empresas',
            ],

            'total-leads' => [
                'title' => 'Negócios',
                'total' => 'Total de negócios',
                'won'   => 'Negócios ganhos',
                'lost'  => 'Negócios perdidos',
            ],

            'revenue-by-sources' => [
                'title'       => 'Faturamento por origens',
                'empty-title' => 'Ainda não há dados',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',
            ],

            'revenue-by-types' => [
                'title'       => 'Faturamento por tipos',
                'empty-title' => 'Ainda não há dados',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',
            ],

            'top-selling-products' => [
                'title'       => 'Produtos mais vendidos',
                'empty-title' => 'Ainda não há dados',
                'empty-info'  => 'Nenhum produto disponível para o intervalo selecionado',
            ],

            'top-persons' => [
                'title'       => 'Principais pessoas',
                'empty-title' => 'Ainda não há dados',
                'empty-info'  => 'Nenhuma pessoa disponível para o intervalo selecionado',
            ],

            'open-leads-by-states' => [
                'title'       => 'Negócios por estágios',
                'empty-title' => 'Ainda não há dados',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Versão: :version',
        'dashboard'            => 'Início',
        'leads'                => 'Oportunidades',
        'quotes'               => 'Cotações',
        'quote'                => 'Cotação',
        'mail'                 => [
            'title'   => 'E-mail',
            'compose' => 'Escrever',
            'inbox'   => 'Caixa de Entrada',
            'draft'   => 'Rascunho',
            'outbox'  => 'Caixa de Saída',
            'sent'    => 'Enviado',
            'trash'   => 'Lixeira',
            'setting' => 'Configurações',
        ],
        'activities'           => 'Atividades',
        'contacts'             => 'Contatos',
        'persons'              => 'Pessoas',
        'person'               => 'Pessoa',
        'organizations'        => 'Empresas',
        'organization'         => 'Empresa',
        'products'             => 'Produtos',
        'product'              => 'Produto',
        'settings'             => 'Configurações',
        'user'                 => 'Usuário',
        'user-info'            => 'Gerencie todos os seus usuários e suas permissões no CRM, o que eles estão autorizados a fazer.',
        'groups'               => 'Grupos',
        'groups-info'          => 'Adicionar, editar ou excluir grupos do CRM',
        'roles'                => 'Funções',
        'role'                 => 'Função',
        'roles-info'           => 'Adicionar, editar ou excluir funções do CRM',
        'users'                => 'Usuários',
        'users-info'           => 'Adicionar, editar ou excluir usuários do CRM',
        'lead'                 => 'Negócio',
        'lead-info'            => 'Gerencie todas as configurações relacionadas aos Negócios no CRM',
        'pipelines'            => 'Funis',
        'pipelines-info'       => 'Adicionar, editar ou excluir funis do CRM',
        'sources'              => 'Origens',
        'sources-info'         => 'Adicionar, editar ou excluir origems do CRM',
        'types'                => 'Tipos',
        'types-info'           => 'Adicionar, editar ou excluir tipos do CRM',
        'automation'           => 'Automação',
        'automation-info'      => 'Gerencie todas as configurações de automação no CRM',
        'attributes'           => 'Atributos',
        'attribute'            => 'Atributo',
        'attributes-info'      => 'Adicionar, editar ou excluir atributos do CRM',
        'email-templates'      => 'Modelos de E-mail',
        'email'                => 'E-mail',
        'email-templates-info' => 'Adicionar, editar ou excluir modelos de e-mail do CRM',
        'workflows'            => 'Fluxos de Trabalho',
        'workflows-info'       => 'Adicionar, editar ou excluir fluxos de trabalho do CRM',
        'other-settings'       => 'Outras Configurações',
        'other-settings-info'  => 'Gerencie todas as configurações extras no CRM',
        'tags'                 => 'Tags',
        'tags-info'            => 'Adicionar, editar ou excluir tags do CRM',
        'my-account'           => 'Minha conta',
        'sign-out'             => 'Sair',
        'back'                 => 'Voltar',
        'name'                 => 'Nome',
        'configuration'        => 'Configuração',
        'howdy'                => 'Olá!',
        'warehouses'           => 'Depósitos',
        'warehouse'            => 'Depósito',
        'warehouses-info'      => 'Adicionar, editar ou excluir depósitos do CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Nome',
            'email'                 => 'E-mail',
            'password'              => 'Senha',
            'my_account'            => 'Minha conta',
            'update_details'        => 'Atualizar Detalhes',
            'current_password'      => 'Senha atual',
            'confirm_password'      => 'Confirmar senha',
            'password-match'        => 'A senha atual não corresponde.',
            'account-save'          => 'Alterações na conta salvas com sucesso.',
            'permission-denied'     => 'Permissão Negada',
            'remove-image'          => 'Remover Imagem',
            'upload_image_pix'      => 'Carregar uma Imagem de Perfil (100px x 100px)',
            'upload_image_format'   => 'em formato PNG ou JPG',
            'image_upload_message'  => 'Somente imagens (.jpeg, .jpg, .png, ..) são permitidas.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Prezado(a) :name',
            'cheers' => 'Atenciosamente,</br>Equipe :app_name',

            'user'   => [
                'dear'           => 'Prezado(a) :username',
                'create-subject' => 'Você foi adicionado como membro.',
                'create-body'    => 'Parabéns! Agora você é um membro da nossa equipe.',

                'forget-password' => [
                    'subject'           => 'Redefinir Senha do Cliente',
                    'dear'              => 'Prezado(a) :username',
                    'reset-password'    => 'Redefinir Senha',
                    'info'              => 'Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.',
                    'final-summary'     => 'Se você não solicitou a redefinição de senha, nenhuma outra ação é necessária.',
                    'thanks'            => 'Obrigado!',
                ],
            ],
        ],
    ],

    'errors' => [
        '401' => 'Você não tem autorização para acessar esta página',
    ],

    'export' => [
        'csv'        => 'CSV',
        'download'   => 'Download',
        'export'     => 'Exportar',
        'no-records' => 'Nenhum registro encontrado.',
        'xls'        => 'XLS',
        'xlsx'       => 'XLSX',
    ],
];
