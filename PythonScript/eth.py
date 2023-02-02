import requests
import time
import mysql.connector

previous_price = 1

dbConnection = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='Cripto'
)

dbCursor = dbConnection.cursor()

QueryBitcoin = "INSERT INTO Etherium (value) VALUES (%s)"
Val = 0

while True:
    Response = requests.get("https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd")
    price_data = Response.json()
    price = price_data['ethereum']['usd']
    formatted_price = "{:,.2f}".format(price)
    if price == previous_price:
        print("No hay cambios en Eth, no se guardara en la base de datos")

    elif price > previous_price:
        print("El precio de ETH en USD cambio, ahora es de es: $" + formatted_price)
        ValBtc = price
        dbCursor.execute(QueryBitcoin, (ValBtc,))
        dbConnection.commit()
        previous_price = price
    elif price < previous_price:
        previous_price = price
        print("El precio de ETH en USD bajo, ahora es: $" + formatted_price)
        ValBtc = price
        dbCursor.execute(QueryBitcoin, (ValBtc,))
        dbConnection.commit()

    time.sleep(5)
