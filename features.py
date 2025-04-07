import pandas as pd
from sklearn.preprocessing import StandardScaler

# Load the dataset
df = pd.read_csv(r"C:\Users\siddh\Downloads\AI&ML Assignments\Data.csv")

# Display original data
print("Original Data:")
print(df.head())

# Select only numeric columns for scaling
numeric_cols = df.select_dtypes(include=['float64', 'int64']).columns

# Initialize StandardScaler
scaler = StandardScaler()

# Fit and transform the numeric columns
df_scaled = df.copy()
df_scaled[numeric_cols] = scaler.fit_transform(df[numeric_cols])

# Display scaled data
print("\nScaled Data:")
print(df_scaled.head())
