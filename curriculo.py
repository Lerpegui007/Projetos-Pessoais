import tkinter as tk
from jinja2 import Environment, FileSystemLoader
import webbrowser
import os

janela = tk.Tk()
janela.title("Gerador de Currículo")
janela.geometry("700x700")


def gerar():
    dados = {
        "nome": entrada_nome.get(),
        "email": entrada_email.get(),
        "telefone": entrada_telefone.get(),
        "cidade": entrada_cidade.get(),
        "endereco": entrada_endereco.get().strip(),
        "perfil": entrada_perfil.get("1.0", tk.END).strip(),
        "habilidades": entrada_habilidades.get("1.0", tk.END).strip(),
        "experiencia": entrada_experiencia.get("1.0", tk.END).strip(),
        "formacao": entrada_formacao.get("1.0", tk.END).strip()
    }
    pasta_atual = os.path.dirname(os.path.abspath(__file__))

    env = Environment(loader=FileSystemLoader(pasta_atual))

    template = env.get_template("curriculo_template.html")

    html_final = template.render(dados)

    caminho_html = os.path.join(pasta_atual, "curriculo_final.html")

    with open(caminho_html, "w", encoding="utf-8") as arquivo:
        arquivo.write(html_final)

    webbrowser.open(caminho_html)

    print("Currículo HTML gerado com sucesso!")

tk.Label(janela, text="Nome:").grid(row=0, column=0, padx=10, pady=5, sticky="w")
entrada_nome = tk.Entry(janela, width=50)
entrada_nome.grid(row=0, column=1, padx=10, pady=5)

tk.Label(janela, text="Email:").grid(row=1, column=0, padx=10, pady=5, sticky="w")
entrada_email = tk.Entry(janela, width=50)
entrada_email.grid(row=1, column=1, padx=10, pady=5)

tk.Label(janela, text="Telefone:").grid(row=2, column=0, padx=10, pady=5, sticky="w")
entrada_telefone = tk.Entry(janela, width=50)
entrada_telefone.grid(row=2, column=1, padx=10, pady=5)

tk.Label(janela, text="Cidade:").grid(row=3, column=0, padx=10, pady=5, sticky="w")
entrada_cidade = tk.Entry(janela, width=50)
entrada_cidade.grid(row=3, column=1, padx=10, pady=5)

tk.Label(janela, text="Endereço (opcional):").grid(row=4, column=0, padx=10, pady=5, sticky="w")
entrada_endereco = tk.Entry(janela, width=50)
entrada_endereco.grid(row=4, column=1, padx=10, pady=5)

tk.Label(janela, text="Perfil profissional:").grid(row=4, column=0, padx=10, pady=5, sticky="nw")
entrada_perfil = tk.Text(janela, width=50, height=4)
entrada_perfil.grid(row=4, column=1, padx=10, pady=5)

tk.Label(janela, text="Habilidades:").grid(row=5, column=0, padx=10, pady=5, sticky="nw")
entrada_habilidades = tk.Text(janela, width=50, height=4)
entrada_habilidades.grid(row=5, column=1, padx=10, pady=5)

tk.Label(janela, text="Experiência profissional:").grid(row=6, column=0, padx=10, pady=5, sticky="nw")
entrada_experiencia = tk.Text(janela, width=50, height=6)
entrada_experiencia.grid(row=6, column=1, padx=10, pady=5)

tk.Label(janela, text="Formação acadêmica:").grid(row=7,column=0,padx=10,pady=5,sticky="nw")
entrada_formacao = tk.Text(janela,width=50,height=4)
entrada_formacao.grid(row=7,column=1,padx=10,pady=5)

tk.Button(janela,text="Gerar Currículo",command=gerar).grid(row=8, column=0, columnspan=2, pady=20)

janela.mainloop()