'''
##############################
#       API CONNECTION       #
#       FREE API USAGE       #
#            by              #
#         Coingecko          #
#                            #
#       coingecko.com        #
##############################
'''



import requests
import mysql.connector
import time

dbConnection = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='Cripto'
)

dbCursor = dbConnection.cursor()

ApiCall, DataTable = 'NULL', 'nUll'


def Query(Api_Call, Data_Table):
    Response = requests.get(f"https://api.coingecko.com/api/v3/simple/price?ids={Api_Call}&vs_currencies=usd")
    Price_data = Response.json()
    price = Price_data[f'{Api_Call}']['usd']
    formatted_price = "{:,.2f}".format(price)
    dbCursor.execute(f"SELECT VALUE FROM {Data_Table} order by ID DESC limit 1")
    previous_price = dbCursor.fetchone()[0]
    print(f"{Api_Call} Prev: {previous_price}")

    if price == previous_price:
        print('Null')
    else:
        print(f"{Api_Call} change to: {formatted_price}")
        valCr = price
        dbCursor.execute(f"INSERT INTO {Data_Table} (value) VALUES (%s)", (valCr,))
        dbConnection.commit()


def Main():
    time.sleep(300)
    try:
        Query('bitcoin', 'Bitcoin')

        Query('ethereum', 'Etherium')

        Query('bitcoin-cash', 'BTCC')

    except Exception as e:
        print(f"Error: {e}")
        Main()


Main()
