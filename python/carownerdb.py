import mysql.connector
from mysql.connector import errorcode

def select(conn,query):
    cursor = conn.cursor()
    cursor.execute(query)
    results = []
    for row in cursor.fetchall():
        results.append(row)
    cursor.close()
    return results
def execute(conn,query):  # update, delete, and insert
    cursor = conn.cursor()
    cursor.execute(query)
    conn.commit()
def show(rows):
    for row in rows:
        print(row)

try:
    conn = mysql.connector.connect(
        user="root",
        password="",
        host="localhost",
        database="carowner_ue")
except mysql.connector.Error as err:
    print("Cannot connect.")
    exit()

rows = select(conn,"select * from carowner c join unemployed u where c.id=u.id")
show(rows)
print("Now insert a record")
execute(conn,"insert into carowner values ('canada',2016,14,null,1)")
rows = select(conn,"select * from carowner")
show(rows)