import requests
import bs4 
import json


page=requests.get("https://ngodarpan.gov.in/index.php/home/statewise_ngo/19515/9/1?per_page=100")

soup = bs4.BeautifulSoup(page.text, 'lxml' )

table=soup.find('table', class_='table')
# print(table)

headers=[ heading.text for heading in table.find_all('th') ]
# print(headers)

tables_rows=[ row for row in table.find_all('tr')]
# print(tables_rows)

results=[{headers[index]:cell.text for index, cell in enumerate(row.find_all('td')) } for row in tables_rows  ]
# print(results)
# for data in results:
# print(json.dumps(results, indent=4))
with open('s.json', 'w') as fp:
    json.dump(results, fp, indent=4)