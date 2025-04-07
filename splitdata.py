import pandas as pd
from sklearn.model_selection import train_test_split

# Load the iris dataset from CSV
df = pd.read_csv(r"C:\Users\siddh\Downloads\Iris.csv")

# Display the first few rows (optional)
print("Dataset preview:")
print(df.head())

# Assume the last column is the target (species), and the rest are features
X = df.iloc[:, :-1]  # Features (all columns except the last)
y = df.iloc[:, -1]   # Target (last column)

# Split the dataset: 80% training, 20% testing
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Display shapes of the datasets
print("\nTraining set size:", X_train.shape)
print("Test set size:", X_test.shape)
