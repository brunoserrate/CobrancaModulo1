# CobrancaModulo1

Este é um **módulo de cobrança específico para um cliente**. Ele implementa as regras de negócio necessárias para geração de boletos, acordos, retornos e outras operações.

## Objetivo
Este módulo **fornece a implementação concreta** das operações de cobrança, seguindo a interface definida no [`CobrancaModuloInterface`](https://github.com/brunoserrate/CobrancaModuloInterface).

## Estrutura dos Projetos

- **CobrancaModuloInterface.php**: Interface principal que espelha os métodos da classe abstrata do módulo principal, garantindo que todas as implementações de clientes sigam o mesmo contrato. Esse arquivo pode ser localizado no projeto [CobrancaModuloInterface](https://github.com/brunoserrate/CobrancaModuloInterface).

- **CobrancaModulo.php**: Módulo abstrato que é utilizado no sistema principal. Esse arquivo pode ser localizado no projeto [CobrancaCoreTest](https://github.com/brunoserrate/CobrancaCoreTest).

- **ModuloCliente01.php**: Módulo de implementação de um cliente especifico. Esse arquivo pode ser localizado no projeto [CobrancaModulo1](https://github.com/brunoserrate/CobrancaModulo1).

## 🔧 Instalação
```bash
composer require bruno/cobranca-modulo1
```
