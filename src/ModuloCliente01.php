<?php

namespace Cliente01;

use Core\Cobranca\CobrancaModuloInterface;

class ModuloCliente01 implements CobrancaModuloInterface
{
    /**
     * Gera um acordo com base nos dados do cliente
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function gerarAcordo(array $dados): array
    {
        // Lógica específica para o Cliente 01
        return [
            'sucesso' => true,
            'mensagem' => 'Acordo gerado com sucesso',
            'dados' => [
                'id_acordo' => rand(1000, 9999),
                'cliente' => $dados['nome'] ?? 'Cliente não identificado',
                'valor_total' => $dados['valor_divida'] ?? 0,
                'numero_parcelas' => $dados['numero_parcelas'] ?? 1,
                'data_criacao' => date('Y-m-d H:i:s')
            ]
        ];
    }

    /**
     * Gera as parcelas de um acordo
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @param array $acordo acordo gerado pelo método gerarAcordo
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function gerarParcelas(array $dados, array $acordo): array
    {
        // Lógica específica para o Cliente 01
        $parcelas = [];
        $valorParcela = $acordo['dados']['valor_total'] / $acordo['dados']['numero_parcelas'];

        for ($i = 1; $i <= $acordo['dados']['numero_parcelas']; $i++) {
            $parcelas[] = [
                'numero' => $i,
                'valor' => $valorParcela,
                'data_vencimento' => date('Y-m-d', strtotime("+{$i} month"))
            ];
        }

        return [
            'sucesso' => true,
            'mensagem' => 'Parcelas geradas com sucesso',
            'dados' => [
                'id_acordo' => $acordo['dados']['id_acordo'],
                'parcelas' => $parcelas
            ]
        ];
    }

    /**
     * Busca um acordo com base nos dados do cliente
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function buscarAcordo(array $dados): array
    {
        // Lógica específica para o Cliente 01
        return [
            'sucesso' => true,
            'mensagem' => 'Acordo encontrado',
            'dados' => [
                'id_acordo' => $dados['id_acordo'] ?? null,
                'cliente' => $dados['nome'] ?? 'Cliente não identificado',
                'valor_total' => $dados['valor_divida'] ?? 0,
                'numero_parcelas' => $dados['numero_parcelas'] ?? 0,
                'status' => 'ativo'
            ]
        ];
    }
}