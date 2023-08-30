import psycopg2
from psycopg2 import sql

#$dbconn = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com port=5432 dbname=postgres user=azureuser password=Db@Password1234");
db_params = {
    'dbname': 'postgres',
    'user': 'azureuser',
    'password': 'Db@Password1234',
    'host': 'jhhdevopsterra-pgsql-server.postgres.database.azure.com',
    'port': '5432'
}

connection = psycopg2.connect(**db_params)
cursor = connection.cursor()

update_query = sql.SQL("UPDATE your_table_name SET column1 = %s WHERE condition_column = %s")
new_value = "new_value"
condition_value = "condition_value"

cursor.execute(update_query, (new_value, condition_value))

connection.commit()

cursor.close()
connection.close()