#  Aura Math — Calculadora Inteligente com IA

**Aura Math** é uma calculadora avançada que combina a precisão da computação simbólica com a inteligência artificial. Projetada para resolver desde aritmética simples até cálculos complexos de engenharia, como derivadas e integrais, entregando resultados formatados em LaTeX profissional.

##  Tecnologias Utilizadas

* **Laravel 11**: Estrutura para o back-end.
* **Groq API (Llama 3.1 8B)**: Processamento de linguagem natural e motor de cálculo via IA.
* **MathJax**: Renderização de fórmulas matemáticas de alta qualidade no navegador.
* **CSS3 Customizado**: Interface limpa, responsiva e focada na experiência do usuário.

##  Diferenciais

* **Passo a Passo**: Não apenas o resultado, mas uma explicação lógica e concisa do cálculo.
* **Renderização Matemática**: Visualização profissional de integrais, frações e potências.
* **Interface Otimizada**: Teclado virtual integrado para facilitar a montagem de expressões complexas.
* **Segurança**: Implementação de *Rate Limiting* e tratamento rigoroso de exceções.

## ️ Como rodar o projeto localmente

1. Clone o repositório:
   `git clone https://github.com/seu-usuario/aura-math.git`

2. Instale as dependências:
   `composer install`

3. Configure o arquivo `.env`:
    * Adicione sua `APP_KEY`
    * Adicione sua `GROQ_API_KEY`

4. Inicie o servidor:
   `php artisan serve`
