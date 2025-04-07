def dfs(graph, node, visited=None):
    if visited is None:
        visited = set() 

    if node not in visited:
        print(node, end=" ")  
        visited.add(node) 

        
        for neighbor in graph[node]:
            dfs(graph, neighbor, visited)


graph = {
    'A': ['B', 'C'],
    'B': ['A', 'D', 'E'],
    'C': ['A', 'F', 'G'],
    'D': ['B'],
    'E': ['B', 'H'],
    'F': ['C'],
    'G': ['C'],
    'H': ['E']
}


print("DFS Traversal starting from A:")
dfs(graph, 'A')
