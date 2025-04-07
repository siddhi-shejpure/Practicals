import pandas as pd
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

# Load dataset
df = pd.read_csv(r"C:\Users\siddh\Downloads\score.csv")
X, y = df[['Hours']], df['Scores']

# Train-Test Split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train the model
model = LinearRegression().fit(X_train, y_train)

# Predictions
y_pred = model.predict(X_test)

# Plot results
plt.scatter(X, y, color='blue', label='Actual')
plt.plot(X, model.predict(X), color='red', label='Regression Line')
plt.xlabel("Study Hours"), plt.ylabel("Scores"), plt.legend()
plt.show()

hours = pd.DataFrame([[7]], columns=['Hours'])  # Create a DataFrame with the same column name as X
predicted_score = model.predict(hours)
print(f"Predicted Score for 7 hours of study: {predicted_score[0]:.2f}")
