import requests
import firebase_admin
from firebase_admin import credentials, db
from bs4 import BeautifulSoup

# Firebase Setup
try:
    cred = credentials.Certificate("serviceAccountKey.json")
    firebase_admin.initialize_app(cred, {
        'databaseURL': 'https://radarxtvscores-default-rtdb.firebaseio.com/'  # Apna Firebase URL daal
    })
    print("✅ Firebase Connected Successfully!")
except Exception as e:
    print("❌ Firebase Connection Error:", e)

def fetch_scores():
    url = "https://crex.live/"
    headers = {"User-Agent": "Mozilla/5.0"}
    response = requests.get(url, headers=headers)
    
    if response.status_code == 200:
        soup = BeautifulSoup(response.text, 'html.parser')
        matches = []

        # Example: Scraping Match Titles (Customize as needed)
        for match in soup.find_all('div', class_='match-card'):  
            title = match.find('h3').text.strip()  
            status = match.find('span', class_='match-status').text.strip()  
            score = match.find('span', class_='match-score').text.strip()  
            matches.append({"title": title, "status": status, "score": score})
        
        # Firebase me Data Store Karna
        try:
            ref = db.reference("/matches")
            ref.set(matches)
            print("✅ Data Successfully Uploaded to Firebase!")
        except Exception as e:
            print("❌ Firebase Upload Error:", e)

    else:
        print("❌ Failed to Fetch Data! Status Code:", response.status_code)

fetch_scores()