import pandas as pd
from sklearn.preprocessing import LabelEncoder, OneHotEncoder
df = pd.read_csv(r"C:\Users\siddh\Downloads\Iris.csv")
print("Original Dataset:")
print(df.head())
categorical_columns = df.select_dtypes(include=['object']).columns
print("\nCategorical Columns:", categorical_columns.tolist())
label_encoders = {}

for col in categorical_columns:
    le = LabelEncoder()
    df[col + '_label'] = le.fit_transform(df[col])  
    label_encoders[col] = le

print("\nDataset after Label Encoding:")
print(df.head())

one_hot_encoder = OneHotEncoder(sparse_output=False, drop='first') 
encoded_array = one_hot_encoder.fit_transform(df[categorical_columns])
encoded_df = pd.DataFrame(encoded_array, columns=one_hot_encoder.get_feature_names_out(categorical_columns))
df = df.drop(columns=categorical_columns).join(encoded_df)

print("\nDataset after One-Hot Encoding:")
print(df.head())