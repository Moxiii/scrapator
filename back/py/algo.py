# attente pour la sauvegarde et ne pas fait planter un site x ce faire repérer 
from time import sleep
# selenium 
from selenium import webbdriver
from selenium.webdriver.chrome.options import Options
# pandas pour l'analyse de données 
import pandas as pd
marque,modele,liens = ""
prix = 0
class Options():
#on définit les option de lancement de sélénium
    options = Options()
    options.headless =True
    options.add_argument("start-minimized")
    options.add_argumet("-no-sandbox")
    driver = webbdriver.Chrome(options=options)
class Result():
    def retrun_resultat():
            resultats=[]
            data = []
            for i in range (len(titre)):
                produits = titre[i].text
                resultats.append(produits)
                for x in range (len(prix)):
                    price = prix[i].text
                    data.append(price)
            return resultats + data
        

class site():
    print("Site dispo : Vinted , StockX, kikikickz, wethenew")
    def Vinted():    
    # le site sur le quel on veut récuperer les données 
        Options.driver.get("https://www.vinted.fr/hommes/chaussures/baskets")
    # lien vers la page de recherche id="search_text"
    # stock + affichage resultat 

        titre = Options.driver.find_elements_by_xpath('//*[@class="feed-grid__item"]')
        prix = Options.driver.find_elements_by_xpath('//*[@class="Cell_content__2bRVC"]')
        Result.retrun_resultat()
    Options.driver.quit()

    def Stockx():
        Options.driver.get("https://stockx.com/sneakers")
        titre = Options.driver.find_element_by_xpath('//*[""]')
        prix = Options.driver.find.element_by_xpath('//*[""]')
        Result.retrun_resultat()
    Options.driver.quit()

    def kikikickz():

        Options.driver.get("https://kikikickz.com/collections/all")
        titre = Options.driver.find_element_by_xpath('//*[""]')
        prix = Options.driver.find.element_by_xpath('//*[""]')
        Result.retrun_resultat()
    Options.driver.quit()

    def wethenew():
        Options.driver.get("https://wethenew.com/collections/all-sneakerskii")
        titre = Options.driver.find_element_by_xpath('//*[""]')
        prix = Options.driver.find.element_by_xpath('//*[""]')
        Result.retrun_resultat()
    Options.driver.quit()