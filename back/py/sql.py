from algo import * 
import pyodbc
#connexion a une bdd
database = 'mydb' 
username = 'myusername' 
password = 'mypassword' 
conn = pyodbc.connect('DRIVER={ODBC Driver 17 for SQL Server};DATABASE='+database+';UID='+username+';PWD='+ password)

# récuperer les données pour les envoyer en BDD
cursor = conn.cursor()
# cursor.execute execute des commande SQL pour insert ou select pour afficher
def insert():
    cursor.execute(''' 
                    INSERT INTO articles (marque,modele,prix,liens)
                    VALUES
                    ${marque},${model},${prix},${liens}
                    ''')
    conn.commit()
def select():
    
    cursor.execute('''

                    SELECT ${model} FROM articles
    
                   ''')
    row = cursor.fetchone()
    while row:
        print(row[0])
        row = cursor.fetchone()
def doublon():
    doublon = cursor.execute(''' 
                            SELECT COUNT(${liens}) 
                            FROM articles 
                            GROUP BY liens
                            HAVING COUNT (liens)>1 
                            ''')
    row = cursor.fetchone()
    print(row)