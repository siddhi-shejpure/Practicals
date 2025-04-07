from collections import deque

def water_jug_bfs(capacity_A, capacity_B, target):
    visited = set()
    queue = deque()
    parent = {}

    start = (0, 0)
    queue.append(start)
    visited.add(start)
    parent[start] = None

    while queue:
        current_A, current_B = queue.popleft()

        if (current_A, current_B) == (target, 0):
            path = []
            state = (current_A, current_B)
            while state is not None:
                path.append(state)
                state = parent[state]
            path.reverse()

            print("Steps to reach the target:")
            for step in path:
                print(step)
            return path

        states = [
            (capacity_A, current_B),  # Fill A
            (current_A, capacity_B),  # Fill B
            (0, current_B),           # Empty A
            (current_A, 0),           # Empty B

            (current_A - min(current_A, capacity_B - current_B),
             current_B + min(current_A, capacity_B - current_B)),

            (current_A + min(current_B, capacity_A - current_A),
             current_B - min(current_B, capacity_A - current_A))
        ]

        for state in states:
            if state not in visited:
                visited.add(state)
                parent[state] = (current_A, current_B)
                queue.append(state)

    print("No solution found.")
    return None

capacity_A = 4
capacity_B = 3
target = 2  
water_jug_bfs(capacity_A, capacity_B, target)
